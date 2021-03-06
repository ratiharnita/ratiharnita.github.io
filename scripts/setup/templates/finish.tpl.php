<div class="nav"><b>pre-installation check &raquo; license &raquo; configuration &raquo; completed</b></div>
<h2 id="install">Installation completed</h2>
<h3>Installation log:</h3>
<p>Once this is done you should log in using the admin credentials you provided on the previous form and configure the software according to your needs.<br /><br />
  <strong>Thank you for choosing OcimPress.</strong></p>
<table class="inner-content data">
  <tr>
    <td>Database Installation</td>
    <td><?php if ($msg):?>
      <?php echo '<span class="no">Error during MySQL queries execution:</span><br />'; ?> <?php echo $msg; ?>
      <?php else : ?>
      <?php echo '<span class="yes">OK</span>'; ?>
      <?php endif; ?></td>
  </tr>
  <tr>
    <td>Configuration File</td>
    <td><span class="yes">Available for download</span><br />
      If there was a problem creating oc-config.php file, you MUST save oc-config.php file to your local PC and then upload to OcimPress <strong>root</strong> directory. <a href="javascript:void(0);" onclick="if (document.getElementById('file_content').style.display=='block') { document.getElementById('file_content').style.display='none';} else {document.getElementById('file_content').style.display='block'}">Click here</a> to view the content of oc-config.php file.<br />
      <div style="margin: 10px 0; text-align: center;">
        <input type="button" onclick="document.location.href='safe_config.php?h=<?php echo $_POST['dbhost'].'&u='.$_POST['dbuser'].'&p='.$_POST['dbpwd'].'&n='.$_POST['dbname'];?>';" value="Download oc-config.php" />
      </div></td>
  </tr>
  <tr>
    <td colspan="2"><div style="display:none;border: 1px solid #777;height: 400px; background-color: #fff; padding:10px;overflow:auto;" id="file_content">
        <?php if (is_callable("highlight_string")):?>
        <?php highlight_string(safeConfig($_POST['dbhost'] , $_POST['dbuser'], $_POST['dbpwd'], $_POST['dbname']));?>
        <?php endif;?>
      </div></td>
  </tr>
  <tr>
    <td colspan="2"><div class="remove_install">Now you MUST completely remove '<b>setup</b>' directory from your server.</div></td>
  </tr>
</table>
<div class="btn lgn">
  <button type="button" onclick="history.go(-1);" name="check">Back</button>
  &nbsp;&nbsp;
  <button type="button" onclick="document.location.href='../oc-admin/';" name="next" tabindex="3">Admin</button>
</div>