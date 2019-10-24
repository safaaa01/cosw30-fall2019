<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
  display: grid;
  grid-template: 100px / auto auto auto;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
</style>
</head>
<body>

<h1>Treat street Menu</h1>

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
but also the leap into electronic typesetting, remaining essentially unchanged..</p>
<p>This grid layout has three columns, and the first row is 150px high:</p>

<div class="grid-container">
  <div class="item1">1Beef & Potatos</div>
  <div class="item2">Chicken & rice </div>
  <div class="item3">Fish</div>
  <div class="item4">Hot dog</div>
  <div class="item5">Pizza</div>
  <div class="item6">Taco</div>
  <div class="item7">Hot dog</div>
  <div class="item8">Pizza</div>
  <div class="item9">Taco</div>
  <div class="item10">Hot dog</div>
  <div class="item11">Pizza</div>
  <div class="item12">Taco</div>
</div>

</body>
</html>
