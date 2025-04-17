<?php
    include "../site_directory.php";
    include SITE_ROOT."/db/dbConnect.php";
    $title = "Final Exam";
    include SITE_ROOT."/include/header.php";
?>

        <div class="container">
            <?php
                $sqlTableSelect = "SELECT *
                FROM string_info";
                
                $stmt = $conn->prepare($sqlTableSelect);
                $stmt->execute();
                $result = $stmt->get_result();

                while ($record = $result->fetch_assoc()) {
                    $string_id = $record["string_id"];
                    $message = $record["message"];
                    echo <<<END
                    <div class="row border border-secondary border-2">
                        <div class="col-4">
                            string_id: $string_id
                        </div>
                        <div class="col-8">
                            message: $message
                        </div>
                    </div>
                    END;
                }
            ?>
        </div>
        <div class="container mt-5">
            <form class="row" action="/php/deleteReceive.php" method="POST">
                <div class="col-md-4 d-flex justify-content-center">
                    <label for="inputID" class="form-label">Delete_ID: </label>
                    <input type="text" class="form-control" id="inputID" name="id">
                </div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

<?php
    include SITE_ROOT."/include/footer.php";
?>