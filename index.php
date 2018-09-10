<?php
//require_once 'Class.FilterApp.php'; 
if ((include 'Class.FilterApp.php') == TRUE) {
  echo 'OK';
}else{
  echo 'NOPE';

}
//The STAR
//LEGACY WEST
//DOWNTOWN
//ADD FILTER BUTTONS
//https://places.demo.api.here.com/places/v1/discover/here?at=32.781666%2C-96.798554;r=4828.03&cat=eat-drink&app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg
$coordinats = '32.781666,-96.798554';//thanksgiving tower
$austinCoords= '30.269344,-97.747368';
//mi cocina 33.107504,-96.829027
$boundaryRadius = '4828.03';//in meters
$AppData = new FilterApp;
$restaurantsObj = $AppData->returnNearbyPlaces('Dallas',false);

//var_dump($AppData->ThanksgivingTowerCoordinates);
 if($_SERVER["REQUEST_METHOD"] == "GET"){
  $AppData = new FilterApp;
  $selectedCity = isset($_GET['selectedCity']) ? $_GET['selectedCity'] : 'Dallas';
  $IsFiltered = isset($_GET['IsFiltered']) ? true : false;
  $restaurantsObj = $AppData->returnNearbyPlaces($selectedCity,$IsFiltered);
 

 }
 ?>
  <form method='GET' action='<?php $_PHP_SELF ?>'>
    <select name='selectedCity'>
      <option value='<?php echo $selectedCity ?>'><?php echo $selectedCity ?></option>
      <option value='Dallas'>Dallas</option>
      <option value='The Star'>The Star</option>
      <option value='Legacy West'>Legacy West</option>
    </select>
    <label> Filter Restaurants
      <input type='checkbox' name="IsFiltered" value='true' />
    </label>
    <button type='submit'>Change City</button>
  </form>
 
 <?php
echo "<div style='display:flex;flex-wrap:wrap;background:#0B476D;margin-bottom:50px;color:#CEF19E;'>";
  $fastFood = 'background:#A7DDA7;color:#fff;';
  foreach($restaurantsObj as $key => $restaurantItems){
    $style = ($restaurantItems->category->id != 'restaurant' ? $fastFood : '');
    echo "<div style='padding:15px;width:25%;border:1px solid #78BE97;".$style."'>";
      echo "<h3>{$restaurantItems->title}</h3>";
      echo "<p style='font-family:Arial,verdana,sans-serif'>{$restaurantItems->category->id}</p>";
      echo "<p style='font-family:Arial,verdana,sans-serif'>{$restaurantItems->vicinity}</p>";
    echo "</div>";
  }
echo "</div>";


?>