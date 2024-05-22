<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" id="frmQRCode" onsubmit="generateQRCode();return false;">
    <p>
        <input type="text" name="fullname" placeholder="Full Name" required />
    </p>
    <p>
        <input type="email" name="email" placeholder="Email" required />
    </p>
    <input type="submit" name="submit" value="Submit" />
</form>
<!-- QR Code will appear here -->
<div class="qrcode-image" style="display:none;">
    <div id="content"></div>
    <button onclick="save_qrcode_to_pdf();">Save to PDF</button>
</div>
<script>
    function generateQRCode() {
    var form_data = new FormData(document.getElementById("frmQRCode"));

    picture = document.getElementById('picture').files[0];
    form_data.append('picture', picture);

    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "generate-qrcode.php", true);
    xhttp.onload = function(event) {
        if (xhttp.status == 200) {
            if('success' == JSON.parse(this.response).code) {
                document.querySelector('#content').innerHTML = JSON.parse(this.response).content;
                document.querySelector(".qrcode-image").style.display = "block";
            } else {
                alert(JSON.parse(this.response).content);
            }
        } else {
            alert("Error " + xhttp.status + " occurred when trying to upload your documents.");
        }
    }

    xhttp.send(form_data);
}

function save_qrcode_to_pdf() {
    window.jsPDF = window.jspdf.jsPDF;

    var doc = new jsPDF();
        
    // Source HTMLElement or a string containing HTML.
    var elementHTML = document.querySelector("#content");

    doc.html(elementHTML, {
        callback: function(doc) {
            // Save the PDF
            doc.save('qrcode.pdf');
        },
        x: 15,
        y: 15,
        width: 170, //target width in the PDF document
        windowWidth: 650 //window width in CSS pixels
    });
}
</script>
<script src="custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</body>
</html>