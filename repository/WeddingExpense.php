<?php
include_once "./Db.php";
include_once "./model/Expense.php";
class weddingExpense {

    public static function AllExpense() {
        $allExpense = [];
        $conn = Db::getDbConnection();
        $query = $conn->prepare("SELECT * FROM expense WHERE USER_ID = :userId");
        $query->bindParam(':userId', $_SESSION['id']);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $userExpense) {
            $newExpense = new Expense();
            $newExpense->id = $userExpense['ID'];
            $newExpense->userId = $userExpense['USER_ID'];
            $newExpense->title = $userExpense['TITLE'];
            $newExpense->price = $userExpense['PRICE'];
            array_push($allExpense, $newExpense);
        }
        return $allExpense;
    }

    public static function TotalCost() {
        $conn = Db::getDbConnection();
        $query = $conn->prepare("SELECT SUM(PRICE) FROM expense WHERE USER_ID = :userId");
        $query->bindParam(':userId', $_SESSION['id']);
        $query->execute();
        $totalCost = $query->fetchAll(PDO::FETCH_ASSOC);
        if ($totalCost[0]['SUM(PRICE)'] == NULL) {
        return "PRAZNO";
        } else {
        return $totalCost[0]['SUM(PRICE)']." HRK";
        }
    }

    public static function Draw() {
            echo "
            <form action='./submits/changeWeddingExpense.php' method='POST' class='col-sm-2'>
                <div class='form-group'>
                    <textarea class='form-control' type='text' name='title' rows='1' placeholder='Naziv' required></textarea>
                    <textarea class='form-control' type='number' name='price' rows='1' placeholder='Cijena u kunama' required></textarea>
                    <button type='submit' name='insert' class='btn btn-light float-right'>Dodaj novo</button>
                </div>
            </form><br>";
        foreach(self::AllExpense() as $singleItem){
            echo "
            <form action='./submits/changeWeddingExpense.php' method='POST' class='col-sm-2'>
                <div class='form-group'>
                    <input type='hidden' name='id' value='$singleItem->id'>
                    <textarea class='form-control' type='text' name='title' rows='1' placeholder='$singleItem->title' required>$singleItem->title</textarea>
                    <textarea class='form-control' type='number' name='price' rows='1' placeholder='$singleItem->price HRK' required>$singleItem->price HRK</textarea>
                    <div class='float-right'>
                        <button type='submit' name='delete' class='btn btn-danger'>Obriši</button>
                        <button type='submit' name='update' class='btn btn-light'>Prepravi</button>
                    </div>
                </div>
            </form><br>";
        }
    }
}
?>