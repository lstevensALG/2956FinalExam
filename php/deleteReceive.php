<?php
    include "../site_directory.php";
    include SITE_ROOT."/db/dbConnect.php";
    $title = "Final Exam";
    include SITE_ROOT."/include/header.php";
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];

        $sqlTableDelete = "DELETE FROM string_info
        WHERE string_id = ?";
        $stmt = $conn->prepare($sqlTableDelete);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $success = TRUE;
    }
?>

        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    <p>
                        <?php
                            if (isset($success)) {
                                echo "Message successfully removed.";
                            }
                            else {
                                echo "Message removal unsuccessful";
                            }
                            header("refresh:1; url=/php/showAll.php");
                        ?>
                    </p>
                </div>
            </div>
        </div>

<?php
    include SITE_ROOT."/include/footer.php";
?>