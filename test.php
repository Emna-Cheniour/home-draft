<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="rangePrice.js">
 
  </script>
  <style>
      #slider-range {
  border-top-right-radius: 10px !important;
  border-bottom-right-radius: 10px !important;
  border-top-left-radius: 10px !important;
  border-bottom-left-radius: 10px !important;
  height: 6px;
  border: 1px solid #3B556D !important;
}
#slider-range div {
  background: #3B556D !important;
  border-radius: 8px !important;
}
#slider-range span {
  background: #3B556D;
  margin-top: -3px;
  width: 21px;
  height: 21px;
  border-radius: 10px;
  border: 0px;
}
  </style>
</head>
<body>
 
<p>
  <input type="text" id="amount"  style="border:0; color:#3B556D; font-weight:bold;">
</p>
 
<div id="slider-range"></div>
 
 
</body>
</html>