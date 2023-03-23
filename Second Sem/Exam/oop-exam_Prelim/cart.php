<?php
    require_once "Medicine.php";
    require_once "product.php";


    class Cart extends Medicine{
        private $cartItems = array();
    
        function addToCart($item){
            $this->cartItems[] = $item;
        }
        function viewCart(){
            $arrCartItems = $this->cartItems;
            foreach ($arrCartItems as $key => $Value){
                echo 
                '<ul>
                    <li>Name: ' . $Value->getName() . '</li>
                    <li>Description: ' . $Value->getDescription() . '</li>
                    <li>Price: ₱ ' . number_format($Value->getPrice(), 1 ). '</li>
                    <li>Dose: ' . $Value->getDose() . ' mg.</li>
                    <li>Type: ' . $Value->getType() . '</li>
                    <li>Exp Date: ' . $Value->getExpirationDate() . '</li>
                    <li>SRP: ' . number_format($Value->computeSRP(), 2) . '</li>
                </ul>
                <hr>';
            }

        }
        function computeTotal(){
            $totalPrice = 0;
            foreach($this->cartItems as $key => $Value){
                $totalPrice += $Value->computeSRP();
            }
            echo '<b>Total Cart Amount: </b> ₱ ' . number_format($totalPrice,2);
        }
    
    }

?>