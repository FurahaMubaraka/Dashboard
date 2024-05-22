<?php
if (!class_exists('QRcode')) {
    class QRcode {
        public static function png($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4, $saveandprint = false) {
            QRcode::factory($level, $size, $margin)->png($text, $outfile, $saveandprint);
        }

        public static function factory($level = QR_ECLEVEL_L, $size = 3, $margin = 4) {
            require_once(dirname(__FILE__) . '/qr/qrlib.php');
            $errorCorrectionLevel = constant('QR_ECLEVEL_' . $level);
            return new QRcode($errorCorrectionLevel, $size, $margin);
        }

        protected $qr;
        protected $size;
        protected $margin;

        protected function __construct($errorCorrectionLevel, $size, $margin) {
            $this->qr = new QRcodeLib($errorCorrectionLevel);
            $this->size = $size;
            $this->margin = $margin;
        }

        public function png($text, $outfile = false, $saveandprint = false) {
            $tab = $this->qr->text($text, false, $this->size, $this->margin);
            imagepng($tab, $outfile);
            if ($saveandprint) {
                imagepng($tab);
            }
            imagedestroy($tab);
        }
    }
}
?>
