<?php
namespace Phppot;

use Phppot\CountryState;
if (!empty($_POST["planID"])) {
    
    $planID = $_POST["planID"];
    
    require_once __DIR__ . '/../Model/courseSubject.php';
    $courseSubject = new courseSubject();
    $subjectResult = $courseSubject->getSubject($planID);
    ?>
<option>Select Package</option>
<?php
foreach ($subjectResult as $subject) {
        ?>
<option value="<?php echo $subject["id"]; ?>"><?php echo $subject["package"]; ?></option>
<?php
    }
}
?>