<?php
    include "../site_directory.php";
    include SITE_ROOT."/db/dbConnect.php";
    $title = "Final Exam";
    include SITE_ROOT."/include/header.php";
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $message = $_POST["message"];

        $sqlTableInsert = "INSERT INTO string_info (message) VALUES (?)";
        $stmt = $conn->prepare($sqlTableInsert);
        $stmt->bind_param("s", $message);
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
                                echo "Message successfully recorded.";
                            }
                            else {
                                echo "Message recording unsuccessful";
                            }
                            header("refresh:1; url=/index.php");
                        ?>
                    </p>
                </div>
            </div>
        </div>

<?php
    include SITE_ROOT."/include/footer.php";
?>