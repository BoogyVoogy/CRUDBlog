<?php extract($data); ?>
<?php if($delete_status=="success") { ?>
<p style="color:green">Successfully deleted.</p>
<?php } elseif($delete_status=="fail") { ?>
<p style="color:red">Failed to delete.</p>
<?php } ?>
</br>
<a href="/admin">Back to admin panel</a>
