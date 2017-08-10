<!DOCTYPE HTML>
<?php ini_set("error_reporting", E_ERROR); ?>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
  </head>

  <body>
    <div style="font-family:Amaranth,sans-serif;font-size:16px;text-align:center">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Builder Splash Screen -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-9439286719204795"
           data-ad-slot="7473645393"
           data-ad-format="auto"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
      <br>
      <span style="color:#673ab7;font-size:35px">Ooops</span><br>
      <span style="color:#673ab7;font-size:30px">It seems that your account has been disabled by our staff</span>
      <br/><br/>
      <table style="background-color:#673ab7; margin-left: auto; margin-right: auto; padding:5px; width: 75%;">
        <tr>
          <td style="text-align:center;">
            <font style="font-family:arial,sans-serif;font-size:18px;color:#ffffff;">
              <p><strong>Disabled email:</strong> <?php echo html_entity_decode($_GET['email']) ?></p>
              <p><b>Reason:</b> <?php echo html_entity_decode($_GET['reason']) ?></p>
          		<p><b>Admin who banned:</b> <a href="https://community.makeroid.tk/u/<?php echo $_GET['admin'] ?>" target="_blank" style="color:#71FF33;"><?php echo $_GET['admin'] ?></a></p>
              <br>
              <p>If you think this is an error, you can appeal your ban <a href="https://community.makeroid.tk/groups/Makeroid" target="_blank" style="color:#71FF33;">here</a></p>
              <br>
              <br>
              <p><a href="https://status.makeroid.tk/" target="_blank" style="color:#71FF33;">STATUS SERVER</a></p>
            </font>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>
