<?php
    #region PDO Insert Into database
        function insertDBH($dbname, $tbname, $dataAmount, $Data1 = "", $Data2 = "", $Data3 = "", $Data4 = "", $Data5 = "", $Data6 = "", $Data7 = "", $Data8 = "") {
            /**
            * @param string $dbname Database Name
            * @param string $tbname Table Name
            * @param integer $dataAmount How much inserted data 1-8
            * @param string $Data1 First inserted data Required
            * @param string $Data2 Second inserted data Optional
            * @param string $Data3 Third inserted data Optional
            * @param string $Data4 Fourth inserted data Optional
            * @param string $Data5 Fifth inserted data Optional
            * @param string $Data6 Sixth inserted data Optional
            * @param string $Data7 Seventh inserted data Optional
            * @param string $Data8 Eigth inserted data Optional
            * @author Tijn Peeters
            * @return Status
            */
            $dbh = new PDO("mysql:host=127.0.0.1;dbname=".$dbname."", "root" . "");
            if($dataAmount == 1) $dataAmountValue = "('',?)";
            if($dataAmount == 2) $dataAmountValue = "('',?,?)";
            if($dataAmount == 3) $dataAmountValue = "('',?,?,?)";
            if($dataAmount == 4) $dataAmountValue = "('',?,?,?,?)";
            if($dataAmount == 5) $dataAmountValue = "('',?,?,?,?,?)";
            if($dataAmount == 6) $dataAmountValue = "('',?,?,?,?,?,?)";
            if($dataAmount == 7) $dataAmountValue = "('',?,?,?,?,?,?,?)";
            if($dataAmount == 8) $dataAmountValue = "('',?,?,?,?,?,?,?,?)";
            function insetredData($DBH, $TBname, $DataAmountValue, $amount, $data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8) {
                if($amount == 1) {
                    $stmt = $DBH->prepare('insert into '. $TBname .' values' . $DataAmountValue . '');
                    $stmt->bindParam(1,$data1);
                    $stmt->execute();
                } else if($amount == 2) {
                    $stmt = $DBH->prepare('insert into '. $TBname .' values' . $DataAmountValue . '');
                    $stmt->bindParam(1,$data1);
                    $stmt->bindParam(2,$data2);
                    $stmt->execute();
                } else if($amount == 3) {
                    $stmt = $DBH->prepare('insert into '. $TBname .' values' . $DataAmountValue . '');
                    $stmt->bindParam(1,$data1);
                    $stmt->bindParam(2,$data2);
                    $stmt->bindParam(3,$data3);
                    $stmt->execute();
                } else if($amount == 4) {
                    $stmt = $DBH->prepare('insert into '. $TBname .' values' . $DataAmountValue . '');
                    $stmt->bindParam(1,$data1);
                    $stmt->bindParam(2,$data2);
                    $stmt->bindParam(3,$data3);
                    $stmt->bindParam(4,$data4);
                    $stmt->execute();
                } else if($amount == 5) {
                    $stmt = $DBH->prepare('insert into '. $TBname .' values' . $DataAmountValue . '');
                    $stmt->bindParam(1,$data1);
                    $stmt->bindParam(2,$data2);
                    $stmt->bindParam(3,$data3);
                    $stmt->bindParam(4,$data4);
                    $stmt->bindParam(5,$data5);
                    $stmt->execute();
                } else if($amount == 6) {
                    $stmt = $DBH->prepare('insert into '. $TBname .' values' . $DataAmountValue . '');
                    $stmt->bindParam(1,$data1);
                    $stmt->bindParam(2,$data2);
                    $stmt->bindParam(3,$data3);
                    $stmt->bindParam(4,$data4);
                    $stmt->bindParam(5,$data5);
                    $stmt->bindParam(6,$data6);
                    $stmt->execute();
                } else if($amount == 7) {
                    $stmt = $DBH->prepare('insert into '. $TBname .' values' . $DataAmountValue . '');
                    $stmt->bindParam(1,$data1);
                    $stmt->bindParam(2,$data2);
                    $stmt->bindParam(3,$data3);
                    $stmt->bindParam(4,$data4);
                    $stmt->bindParam(5,$data5);
                    $stmt->bindParam(6,$data6);
                    $stmt->bindParam(7,$data7);
                    $stmt->execute();
                } else if($amount == 8) {
                    $stmt = $DBH->prepare('insert into '. $TBname .' values' . $DataAmountValue . '');
                    $stmt->bindParam(1,$data1);
                    $stmt->bindParam(2,$data2);
                    $stmt->bindParam(3,$data3);
                    $stmt->bindParam(4,$data4);
                    $stmt->bindParam(5,$data5);
                    $stmt->bindParam(6,$data6);
                    $stmt->bindParam(7,$data7);
                    $stmt->bindParam(8,$data8);
                    $stmt->execute();
                }
            }
            if($_SERVER["REQUEST_METHOD"] === "POST") {
                insetredData($dbh, $tbname, $dataAmountValue, $dataAmount, $Data1, $Data2, $Data3, $Data4, $Data5, $Data6, $Data7, $Data8);
            }
        }
    #endregion
    #region PDO Print From Database
        function dbh($dbname, $tbname, $function)
        {
            $dbh = new PDO("mysql:host=127.0.0.1;dbname=". $dbname, "root" . "");
            $stmt = $dbh->query("SELECT * FROM ".$tbname."");
            while ($row = $stmt->fetch()) 
            {
                $function();
            }
        }
    #endregion
    #region testing
        function test()
        {
            echo "testing a external php function";
        }
    #endregion
?>
