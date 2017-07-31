<!--Author: Conor Shipp-->
<!--Copyright 2017 Makeroid-->

<!DOCTYPE html>
<html>
  <head>
	<!--Site Tite-->
	<title>Documentation - Makeroid</title>
	
<?php include "../../assets/templates/header.php"; ?>

	<div class="centre-arrangement">
	<h1>Documentation</h1>
	<h3>Button</h3>
	<br>
	<h3><u>Events</u></h3>
	<ul>
	<a class="help-icons black-text modal-trigger" onClick=" $('#buttonClick').modal('open');">Click</a><br>
    <div id="buttonClick" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Click</h2>
        <p>User tapped and released the button.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonGotFocus').modal('open');">Got Focus</a><br>
    <div id="buttonGotFocus" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Got Focus</h2>
        <p>Indicates the cursor moved over the button so it is now possible to click it.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonLongClick').modal('open');">Long Click</a><br>
    <div id="buttonLongClick" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Long Click</h2>
        <p>User held the button down.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonLostFocus').modal('open');">Lost Focus</a><br>
    <div id="buttonLostFocus" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Lost Focus</h2>
        <p>Indicates the cursor moved away from the button so it is now no longer possible to click it.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonTouchDown').modal('open');">Touch Down</a><br>
    <div id="buttonTouchDown" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Touch Down</h2>
        <p>Indicates that the button was pressed down.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonTouchUp').modal('open');">Touch Up</a><br>
    <div id="buttonTouchUp" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Touch Up</h2>
        <p>Indicates that a button has been released.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>

	</ul>
	<h3><u>Properties</u></h3>
	<ul>
	<a class="help-icons black-text" onClick=" $('#buttonBackgroundColor').modal('open');">Background Color</a><br>
    <div id="buttonBackgroundColor" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Background Color</h2>
        <p>Background color of the button.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonEnabled').modal('open');">Enabled</a><br>
    <div id="buttonEnabled" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Enabled</h2>
        <p>If set, user can tap check box to cause action.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonFontBold').modal('open');">Font Bold</a><br>
    <div id="buttonFontBold" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Font Bold</h2>
        <p>If set, button text is displayed in bold.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonFontItalic').modal('open');">Font Italic</a><br>
    <div id="buttonFontItalic" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Font Italic</h2>
        <p>If set, button text is displayed in italics.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonFontSize').modal('open');">Font Size</a><br>
    <div id="buttonFontSize" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Font Size</h2>
        <p>Point size for button text.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonFontTypeface').modal('open');"><i>Font Typeface</i></a><br>
    <div id="buttonFontTypeface" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2><i>Font Typeface</i></h2>
        <p>Font family for button text.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonHeight').modal('open');">Height</a><br>
    <div id="buttonHeight" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Height</h2>
        <p>The height of the button in px.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonImage').modal('open');">Image</a><br>
    <div id="buttonImage" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Image</h2>
        <p>Image to display on button.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonShape').modal('open');"><i>Shape</i></a><br>
    <div id="buttonShape" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2><i>Shape</i></h2>
        <p>Specifies the button's shape (default, rounded, rectangular, oval). The shape will not be visible if an Image is being displayed.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonShowFeedback').modal('open');">Show Feedback</a><br>
    <div id="buttonShowFeedback" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Show Feedback</h2>
        <p>Specifies if a visual feedback should be shown for a button that as an image as background.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonText').modal('open');">Text</a><br>
    <div id="buttonText" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Text</h2>
        <p>Text to display on button.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonTextAlignment').modal('open');"><i>Text Alignment</i></a><br>
    <div id="buttonTextAlignment" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2><i>Text Alignment</i></h2>
        <p>Left, center, or right.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonTextColor').modal('open');">Text Color</a><br>
    <div id="buttonTextColor" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Text Color</h2>
        <p>Color for button text.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonVisible').modal('open');">Visible</a><br>
    <div id="buttonVisible" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Visible</h2>
        <p>Specifies whether the component should be visible on the screen. Value is true if the component is showing and false if hidden.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	
	<a class="help-icons black-text" onClick=" $('#buttonWidth').modal('open');">Width</a><br>
    <div id="buttonWidth" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h2>Width</h2>
        <p>The width of the button in px.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>
	</ul>
	</div>

<?php include "../../assets/templates/footer.php"; ?>
</body>
</html>
