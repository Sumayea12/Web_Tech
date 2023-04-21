<?php
session_start();
if (isset($_GET['err'])) {
    if ($_GET['err'] == 'invalid_request') {
        echo "invalid request error..";
    }

    if ($_GET['err'] == 'null') {
        echo "Fill all data";
    }
    if ($_GET['err'] == 'dataNotFound') {
        echo "no data found";
    }
}

?>


<html>

<head>
    
    <title>Search terminal information</title>
    <!-- <link href="../Assets/css/style.css" rel="stylesheet" type="text/css" /> -->
    <script src="../uploads/script.js">
    </script>
</head>

<body id="addProduct">


   <!--  <form action="../controls/pharmacyInventorySearchCheck.php" method="post"> -->
   <a href="../views/Home.php"><button>Back to home page</button></a>
    <form action="" method="post">
    <!-- <form action="" method="post"> -->
        <!-- onsubmit="return ajaxForStockManagement() -->

        <table align="center" width="100%">
            <tr align="center">
                <td colspan="4">
                    <h2>Search terminal information</h2>
                </td>

            </tr>
        </table>
        <table align="center">
            <tr align="center">
                <td colspan="4">
                    <p>terminal id: </p>
                </td>
            </tr>
            <tr align="center">
                <td align="center">
                
                    <input type="text" id="searchTerminalCode" name="searchTerminalCode" value="">
                    <input type="button" name="btn" value="Submit" onclick="ajax()" />

                    <h5 style="color:red ;"></h5>


                    <!--  <input type="" disabled name="valid_name"></p> -->
                </td>
            </tr>



            <tr align="center">
                <td colspan="4">
                    
                </td>
                <td align="right"> </td>
                </td>

        </table>
        <!--   <table align="center">

            <tr align="center">
                <td colspan="4">
                    <button>Show all product</button>

                </td>
               

        </table> -->
    </form>

    <!-- extract--------------------------------------------------- -->

    <!-- extra-------------- -->
    <table align="center">
        <tr>
            <td>

            </td>
        </tr>
    </table>



</body>

</html>