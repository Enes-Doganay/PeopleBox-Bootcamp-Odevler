<?php
    require "libs/vars.php";
    require "libs/functions.php";  

    $id = $_GET["id"];
    $result = getBlogByID($id);
    $selectedMovie = mysqli_fetch_assoc($result);

    $title = $description = "";
    $title_err = $description_err = "";

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $input_title = trim($_POST["title"]);

        if(empty($input_title)){
            $title_err = "başlık boş geçilemez.";
        } else if(strlen($input_title) > 150){
            $title_err = "başlık için çok fazla karakter kullandınız. Max: 150kr";
        } else {
            $title = $input_title;
        }

        $input_description = trim($_POST["description"]);

        if(empty($input_description)){
            $description_err = "açıklama boş geçilemez.";
        } else if(strlen($input_description) < 10){
            $description_err = "açıklama için çok az karakter kullandınız. Min: 11kr";
        } else {
            $description = $input_description;
        }

        $image = $_POST["image"];
        $url = $_POST["url"];
        $isActive =isset($_POST["isActive"]) ? 1 : 0;

        $_SESSION["alert_message"] = "";
        
        if(empty($title_err) && empty($description_err)){
            if(editBlog($id,$title,$description,$image,$url,$isActive)){
                $_SESSION["alert_message"] .= "<div class='alert alert-success mb-0 text-center'>Blog başarıyla güncellendi.</div>";
            }
        } else {
            if (!empty($title_err)) {
                $_SESSION["alert_message"] .= "<div class='alert alert-danger mb-0 text-center'>$title_err</div>";
            }
            if (!empty($description_err)) {
                $_SESSION["alert_message"] .= "<div class='alert alert-danger mb-0 text-center'>$description_err</div>";
            }
        }

        echo "<div> {$_SESSION["alert_message"]} </div>";
        unset($_SESSION["alert_message"]);
    }
?>

<?php include "views/_header.php" ?>
<?php include "views/_navbar.php" ?>

<div class="container my-3">

    <div class="row">

        <div class="col-3">
            <?php include "views/_menu.php" ?>     
        </div>
        <div class="col-9">

           <div class="card">
           
                <div class="card-body">
                    <form method="POST">

                        <div class="mb-3">
                            <label for="title" class="form-label">Başlık</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $selectedMovie["title"] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Açıklama</label>
                            <textarea name="description" id="description" class="form-control"><?php echo $selectedMovie["description"] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Resim</label>
                            <input type="text" class="form-control" name="image" id="image" value="<?php echo $selectedMovie["image"] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="url" class="form-label">url</label>
                            <input type="text" class="form-control" name="url" id="url" value="<?php echo $selectedMovie["url"] ?>">
                        </div>
                        <div class="form-check mb-3">
                            <label for="isActive" class="form-check-label">Is Active</label>
                            <input type="checkbox" class="form-check-input" name="isActive" id="isActive" <?php if($selectedMovie["isActive"]){echo "checked";} ?>>
                        </div>

                        <input type="submit" value="Submit" class="btn btn-primary">

                    
                    </form>
                </div>
            </div>

        </div>    
    
    </div>

</div>

<?php include "views/_footer.php" ?>

