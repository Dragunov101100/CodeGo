<?php
header("Access-Control-Allow-Origin: *");

$Vegetable = array(
  array(
    "name" => "Carrot",
    "crop_type" => "Root Crop",
    "scientific_name" => "Daucus carota",
    "info" => "Carrots are the most widely cultivated of root crops
               and should be ready for harvest about 60-80 days after
               sowing seeds, depending on the variety.",
    "image" => "https://media.istockphoto.com/id/185275579/photo/bundles-of-organic-carrots-with-the-stems-still-attached.jpg?b=1&s=170667a&w=0&k=20&c=tlOo0x-fKU2H1tz58_11VC2tiZwlDYf-icMR5dZviDU=",
  ),
  array(
    "name" => "Potato",
    "crop_type" => "Root Crop",
    "scientific_name" => "Solanum tuberosum",
    "info" => "Potatoes and yams are tubers, whereas taro and cocoyams
               are derived from corms, underground stems, and swollen hypocotyls.
               Cassava and sweet potatoes are storage roots and canna and
               arrowroots are edible rhizomes.",
    "image" => "https://thumbs.dreamstime.com/b/potatoes-fresh-wooden-basket-33186647.jpg.",
  ),
  array(
    "name" => "Wheat",
    "crop_type" => "Cereal Crop, Fodder Crop",
    "scientific_name" => "Triticum aestivum",
    "info" => "Wheat is a grass widely cultivated for its seed, a cereal
               grain that is a worldwide staple food.",
    "image" => "https://thumbs.dreamstime.com/b/grains-ears-wheat-25858561.jpg.
    ",
  ),
  array(
    "name" => "Oats",
    "crop_type" => "Cereal Crop, Fodder Crop",
    "scientific_name" => "Avena sativa",
    "info" => "Cultivation of Oat is similar as wheat crop. It is mainly grown
               in Temperate and Subtropical climates. It can also thrive well
               in high-altitude tropics. They are very popular due to their
               health benefits.",
    "image" => "https://cdn-prod.medicalnewstoday.com/content/images/articles/311/311409/oatmeal.jpg",
  ),
  array(
    "name" => "Corn",
    "crop_type" => "Field Crop, Feed Crop",
    "scientific_name" => "Zea mays",
    "info" => "Most of the crop is used domestically as the main energy ingredient in livestock feed
               and for fuel ethanol production. Corn is also processed into a multitude of food and
               industrial products including starch, sweeteners, corn oil, and beverage and industrial
               alcohols.",
    "image" => "https://img.ehowcdn.com/640/clsd/getty/94ccbc5f3e154789a48b54fa7c36fe98",
  ),
);

echo json_encode(array("Vegetables" => $Vegetable));
?>
