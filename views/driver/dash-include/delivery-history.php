



<!DOCTYPE html>
<html>
<head>

<style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 75%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
        .button {
            background-color: blue;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }
            

        </style>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dash.css">
    <title>Delivery History</title>
</head>
<body>
    <div class="driver-dashboard">
        <?php include('nav/delivery_history_nav.php'); ?>
        <div class="content">
            <div class="container">
                <a href="accept_orders.php" class="card" id="card1" style="display: block;">
                    <i class="fas fa-inbox"></i>
                    <div class="container">
                        <h4><b>Accept Orders</br>3</b ></h4>
                    </div>
                </a>
                <a href="delivery_history.php" class="card" id="card2" style="display: block;">
                    <i class="fas fa-list-alt"></i>
                    <div class=" container">
                        <h4><b>Delivery History</br></b></h4>
                    </div>
                 </a>
                <a href="earnings.php" class="card" id="card3" style="display: block;">
                    <i class="fas fa-money-check-alt"></i>
                    <div class="container">
                        <h4><b>Earnings</br>350.00</b></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="content">  
         <table>
            <tr>
                <th>Date</th>
                <th>Restaurant Name</th>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Payment</th>
                <th>Order Status</th>
                
            </tr>
            <tr>
                <td>1/11/2020</td>
                <td>Mathara Bath Kade</td>
                <td>12</td>
                <td>Mr.Nishantha</td>
                <td>350.00</td>
                <td>Completed</td>
                
            </tr>
            <tr>
                <td>1/11/2020</td>
                <td>Nelum Hotel</td>
                <td>145</td>
                <td>Mr.Kasun</td>
                <td>1450.00</td>
                <td>Completed</td>
                
            </tr>
            <tr>
                <td>1/11/2020</td>
                <td>Wasana Restaurant</td>
                <td>15</td>
                <td>Mr.Kumara</td>
                <td>750.00</td>
                <td>Completed</td>
            </tr>
             <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th></th>
                <td><a href="earnings.php"><button type="button" class="button">View Earnings</button></a></td>

             </tr>

         </table>       
    </div>    


    <?php include('foot.php'); ?>
</body>
</html>
