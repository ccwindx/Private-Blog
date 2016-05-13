<?php 
    // initialize empty image with dimensions of 120 x 30 pixels
    $image = @imagecreatetruecolor(120, 30) or die ("Cannot Initialize new GD image stream");

    // set background to white and allocate drawing colors
    $background = imagecolorallocate($image, 0xff, 0xff, 0xff, 0xff);
    imagefill($image, 0, 0, $background);
    $linecolor = imagecolorallocate($image, 0xcc, 0xcc, 0xcc);
    $textcolor = imagecolorallocate($image, 0x33, 0x33, 0x33);

    // draw random lines on canvas
    for ($i = 0; $i < 6; i++) {
      imagesetthickness($image, rand(1, 3));
      imageline($image, 0, rand(0, 30), 120, rand(0, 30), $linecolor);
    }

    session_start();

    // add random digits to canvas
    $digit = '';
    for ($x = 15; $x <= 95; $x += 20)
    {
      $digit .= ($num = rand(0, 9));
      imagechar($image, rand(3, 5), $x, rand(2, 14), $num, $textcolor);
    }

    // record digits in session variable 
    $_SESSION['digit'] = $digit;

    header('Content-type: image/png');
    imagepng($image);
    imagedestroy($image);
?>
