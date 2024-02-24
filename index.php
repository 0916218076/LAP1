<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>this is exercise by Nguyen Huu Tai</title>
</head>
<body>
    <div id="wrapper">
        <h2>CLASSIFICATION OF THE RESULT</h2>
        <form action="#" method="post">
            <!-- Mathematics -->
            <div class="row">
                <div class="lbltitle">
                    <label>Math scores</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="math"
                         value="<?php echo isset($_POST['math']) ? $_POST['math'] : ""; ?>"/>
                </div>
            </div>
            <!-- Physics -->
            <div class="row">
                <div class="lbltitle">
                    <label>Physics scores</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Physics"
                         value="<?php echo isset($_POST['Physics']) ? $_POST['Physics'] : ""; ?>"/>
                </div>
            </div>
            <!-- Chemistry -->
            <div class="row">
                <div class="lbltitle">
                    <label>Chemistry scores</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Chemistry"
                         value="<?php echo isset($_POST['Chemistry']) ? $_POST['Chemistry'] : ""; ?>"/>
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label>Select an area</label>
                </div>
                <div class="lblinput">
                    <select name="area">
                        <option value="0">-- Select an area --</option>
                        <option value="1" <?php echo isset($_POST['area'])==1 ? "selected" : "" ?>>Area 1</option>
                        <option value="2" <?php echo isset($_POST['area'])==2 ? "selected" : ""; ?>>Area 2</option>
                        <option value="3" <?php echo isset($_POST['area'])==3 ? "selected" : ""; ?>>Area 3</option>
                        <option value="4" <?php echo isset($_POST['area'])==4 ? "selected" : ""; ?>>Area 4</option>
                        <option value="5" <?php echo isset($_POST['area'])==5 ? "selected" : ""; ?>>Area 5</option>
                    </select>
                </div>
            </div>
            <!-- Button Rating -->
            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Rating"/>
                </div>
            </div>
            <!-- Display results -->
            <div class="row">
                <h2>Rating result</h2>
                <label>Total Points</label>
                <div class="lbloutput">
                    <?php echo isset($_POST['btnsubmit']) ? $_POST['math'] + $_POST['Physics'] + $_POST['Chemistry'] : ""; ?>
                </div>
                <label>Ratings</label>
                <div class="lbloutput">
                    <?php if(isset($_POST['btnsubmit'])){
                        $total_ponts = $_POST['math'] + $_POST['Physics'] +$_POST['Chemistry'];
                        if($total_ponts >= 24) echo "Very good";
                        elseif($total_ponts >= 21) echo "Good";
                        elseif($total_ponts >= 15) echo "Average";
                        else echo "weak";   
                    } ?>
                </div>
                <label>Priority points</label>
                <div class="lbloutput">
                    <?php if(isset($_POST['btnsubmit'])){
                        $Priority_points = $_POST['area'];
                        switch($Priority_points){
                            case 0:
                            case 4:
                            case 5:
                                echo "0";
                                break;
                            case 1:
                            case 2:
                                echo "5";
                                break;
                            case 3:
                                echo "3";
                                break;
                            default:
                                echo "0";
                                break;
                        }
                    } ?>
                </div>
            </div>
            
            <div class="name">Nguyen Huu Tai</div>
            <div class="contact-info">
                <div class="email-lable">Contact information:</div>
                <div class="email">taipro573@gmail.com</div>
            </div>
        </form>
    </div>
</body>
</html>