<?php 
header('Content-type: application/vnd.mozilla.xul+xml'); 
?>
<!-- XUL markup starts here -->

<?xml version="1.0"?>
<?xml-stylesheet href="chrome://global/skin/" type="text/css"?>

<window
    id="findfile-window"
    title="Find Files"
	orient="vertical"
	align="start"
	xmlns:html="http://www.w3.org/1999/xhtml"
    xmlns="http://www.mozilla.org/keymaster/gatekeeper/there.is.only.xul">
	
<!-- Other elements go here --> 



<hbox>  
<toolbox>
  <menubar id="sample-menubar">
    <menu id="file-menu" label="File">
      <menupopup id="file-popup">
        <menuitem label="New"/>
        <menuitem label="Open"/>
        <menuitem label="Save"/>
        <menuseparator/>
        <menuitem label="Exit"/>
      </menupopup>
    </menu>
    <menu id="edit-menu" label="Edit">
      <menupopup id="edit-popup">
        <menuitem label="Undo"/>
        <menuitem label="Redo"/>
      </menupopup>
    </menu>
  </menubar>
</toolbox>  

<toolbox>
  <menubar id="sample-menubar">
    <menu id="file-menu" label="Dropdown">
	  <menupopup id="file-popup">
        <menu id="new-menu" label="New">
		
          <menupopup id="new-popup">
            <menuitem label="Window"/>
            <menuitem label="Message"/>
          </menupopup>
        </menu>
        <menuitem label="Open"/>
        <menuitem label="Save"/>
        <menuseparator/>
        <menuitem label="Exit"/>
      </menupopup>
    </menu>
  </menubar>
</toolbox>
</hbox>
  
<spacer style="height: 20px"/>
  
  
<tabbox>
  <tabs>
    <tab label="Mail"/>
    <tab label="News"/>
  </tabs>
  <tabpanels>
    <tabpanel id="mailtab">
      <checkbox label="Automatically check for mail"/>
    </tabpanel>
    <tabpanel id="newstab">
      <button label="Clear News Buffer"/>
    </tabpanel>
  </tabpanels>
</tabbox>


<spacer style="height: 10px"/>
<vbox>
<toolbox>
    <toolbar id="findfiles-toolbar">
      <toolbarbutton id="opensearch" label="Open"/>
      <toolbarbutton id="savesearch" label="Save"/>
    </toolbar>
  </toolbox>
<tabbox selectedIndex="0">
  <tabs>
    <tab label="Search"/>
    <tab label="Options"/>
  </tabs>

  <tabpanels>
   <tabpanel id="searchpanel" orient="vertical">

    <description>
     Enter your search criteria below and select the Find button to begin
     the search.
    </description>

    <spacer style="height: 10px"/>

    <groupbox orient="horizontal">
      <caption label="Search Criteria"/>

      <menulist id="searchtype">
        <menupopup>
          <menuitem label="Name"/>
          <menuitem label="Size"/>
          <menuitem label="Date Modified"/>
        </menupopup>
      </menulist>
      <spacer style="width: 10px;"/>
      <menulist id="searchmode">
        <menupopup>
          <menuitem label="Is"/>
          <menuitem label="Is Not"/>
        </menupopup>
      </menulist>

      <spacer style="height: 10px"/>
      <textbox id="find-text" flex="1" style="min-width: 15em;"/>

    </groupbox>
	<hbox>
    <spacer flex="1"/>

    <button id="find-button" label="Find"/>
    <button id="cancel-button" label="Cancel"/>
  </hbox>
   </tabpanel>

   <tabpanel id="optionspanel" orient="vertical">
    <checkbox id="casecheck" label="Case Sensitive Search"/>
    <checkbox id="wordscheck" label="Match Entire Filename"/>
   </tabpanel>

 </tabpanels>
</tabbox>
</vbox>


    <spacer style="height: 10px"/>

<groupbox orient="horizontal">
      <caption label="Upload File"/>
<grid flex="1">

  <columns>
    <column/>
    <column flex="1"/>
  </columns>

  <rows>
    <row>
      <label control="doctitle" value="Document Title:"/>
      <textbox id="doctitle" flex="1"/>
    </row>
    <row>
      <label control="docpath" value="Path:"/>
      <hbox flex="1">
        <textbox id="docpath" flex="1"/>
        <button label="Browse..."/>
      </hbox>   
    </row>
  </rows>

</grid>
</groupbox>


<toolbox>
  <toolbar id="nav-toolbar">
    <toolbarbutton label="Back"/>
    <toolbarbutton label="Forward"/>
  </toolbar>
</toolbox>


    <spacer style="height: 10px"/>

<popupset>
  <menupopup id="clipmenu">
    <menuitem label="Cut"/>
    <menuitem label="Copy"/>
    <menuitem label="Paste"/>
  </menupopup>
</popupset>

<box context="clipmenu">
  <label value="Right-Click me for menu"/>
</box>


   <spacer style="height: 10px"/>

<button label="Save" tooltiptext="Click here to save your stuff"/>

<popupset>
  <tooltip id="moretip" orient="vertical" style="background-color: #33DD00;">
    <description value="Click here to see more information"/>
    <description value="Really!" style="color: red;"/>
  </tooltip>
</popupset>

<button label="More" tooltip="moretip"/>



</window>