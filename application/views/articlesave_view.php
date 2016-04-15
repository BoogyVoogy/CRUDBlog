<?php extract($data); ?>
<?php if($updatedata_status=="success") { ?>
<p style="color:green">Successfully added</p>
<?php } elseif($updatedata_status=="fail") { ?>
<p style="color:red">Failed to add</p>
<?php } ?>

