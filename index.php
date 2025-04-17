<?php
    include "./site_directory.php";
    include SITE_ROOT."/db/dbCreate.php";
    include SITE_ROOT."/db/dbConnect.php";
    include SITE_ROOT."/db/tableCreate.php";
    $title = "Final Exam";
    include SITE_ROOT."/include/header.php";
?>

        <div class="container mt-5 mb-5">
            <div class="row">
                <form action="/php/messageReceive.php" method="POST">
                    <div class="col-12 mb-5">
                        <label for="inputMessage" class="form-label">Message</label>
                        <input type="text" class="form-control" id="inputMessage" name="message">
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <a href="/php/showAll.php">
                        <button class="btn btn-secondary">Show all records</button>
                    </a>
                </div>
            </div>
        </div>

<?php
    include SITE_ROOT."/include/footer.php";
?>