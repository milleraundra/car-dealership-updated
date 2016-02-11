<?php
  class Car
  {
      private $make_model;
      private $price;
      private $miles;
      private $image;

      function worthBuying($max_price, $max_mileage)
      {
          if (($this->price < ($max_price + 100)) &&
              ($this->miles < $max_mileage)) {
              return $this;
          }
      }

      function __construct($make_model, $price, $miles, $image)
      {
          $this->make_model = $make_model;
          $this->price = $price;
          $this->miles = $miles;
          $this->image = $image;
      }

      function setMakeModel($new_make)
      {
          $this->make_model = $new_make;
      }
      function getMakeModel()
      {
          return $this->make_model;
      }

      function setPrice($new_price)
      {
          $float_price = (float) $new_price;
          if ($float_price != 0) {
              $formatted_price = number_format($float_price, 2);
              $this->price = $formatted_price;
          }
      }
      function getPrice()
      {
          return $this->price;
      }

      function setMileage($new_mileage)
      {
          $this->miles = $new_mileage;
      }
      function getMileage()
      {
          return $this->miles;
      }

      function setImage($new_image)
      {
          $this->image = $new_image;
      }
      function getImage()
      {
          return $this->image;
      }
      function saveCar()
      {
          array_push($_SESSION['list_of_cars'], $this);
      }
      static function filterCars($all_cars)
      {
          foreach ($all_cars as $car) {
            if ($car->worthBuying($all_cars->price, $all_)) {
              array_push($cars_matching_search, $car);
            }
          }
      }


  }


  ?>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
        //   if (!empty($cars_matching_search)) {
        //     foreach ($cars_matching_search as $car) {
        //         $newMake = $car->getMakeModel();
        //         $newPrice = $car->getPrice();
        //         $newMileage = $car->getMileage();
        //         $newImage = $car->getImage();
        //         echo "<img src='$newImage'>";
        //         echo "<li>$newMake</li>";
        //         echo "<ul>";
        //             echo "<li> $$newPrice</li>";
        //             echo "<li> $newMileage</li>";
        //         echo "</ul>";
        //     }
        //   }
        //   else {
        //     echo "There are no cars to show";
        //   }
        ?>
    </ul>
</body>
</html> -->
