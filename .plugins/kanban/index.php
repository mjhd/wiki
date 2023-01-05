<?php
    if (!empty($_POST) ){
        copy('.current_data', 'backups/.current_data_' . date('Y-m-d_H:i:s') . '__' . microtime() );
        file_put_contents('.current_data', $_POST['current_data']);
    }
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="Personal Kanban Board">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
 
        <link rel="stylesheet" href="styles/main.2e1732e0.css">
        
        <link rel="stylesheet" href="styles/themes/default-bright.css" id="themeStylesheet">

        <style>
            form > span *, form > span *::-webkit-file-upload-button {
                cursor: pointer;
            }

            header .navbar-inner, .navbar-header + .col-md-9 {
                height: 50px;
            }
            #save_button {
                height: 100%;
                padding: 0 12px;
                margin-right: 16px;
                overflow: hidden;
                //cursor: pointer;
            }

            #save_button input {
                height: 100%;
                padding: 0 12px;
                border: none;
                background-image: none;
                background-color: #0000;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
            }
            #save_button input:hover {
                outline: solid 1px #999;
            }
            #quickSwitch, #cloudMenu, #first_menu > li:nth-of-type(1), #first_menu > li:nth-of-type(2) {
                display: none !important;
            }
        </style>
        <?php
            if (file_exists('.current_data'))
                $current_data = base64_decode(file_get_contents(".current_data"));

            if (!empty($current_data)):
        ?>
        <script type="text/javascript">
            localStorage.removeItem('myPersonalKanban')
            localStorage.setItem('myPersonalKanban', '<?php echo $current_data; ?>')
        </script>

        <?php 
            else:
                echo '<script type="text/javascript">window.addEventListener("load", function(){ document.getElementById("save_button").firstElementChild.nextElementSibling.value = btoa(localStorage.getItem("myPersonalKanban")); document.getElementById("save_button").submit() })</script>';
            endif; ?>
        
        <script type="text/javascript">
            function link_fix(event){
                event.preventDefault()
                console.log(localStorage.getItem('myPersonalKanban'))
                event.target.nextElementSibling.value = btoa(localStorage.getItem('myPersonalKanban'))
                event.target.parentElement.submit()
            }
            window.addEventListener('load', function() {
                document.getElementById('save_button').addEventListener('click', function(event){ link_fix(event) })
            })
        </script>
</head>
<body ng-app="mpk">
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<div ng-view>
</div>

<script type="text/ng-template" id="kanban.html">

<header class="navbar navbar-fixed-top" role="navigation" id="headerMenu">
  <div class="navbar-inner">
    <div class="container">
      <div class="navbar-header col-md-3">
        <span id="kanbanName" class="navbar-brand" ng-model="kanban" ng-hide="editingName"><a class="renameKanban" ng-click="editingKanbanName()">{{kanban.name}}</a></span>
        <div ng-show="editingName" class="pull-left">
          <form ng-submit="rename()" >
            <div class="input-group">
              <span class="input-group-addon">
                <a ng-click="editingName=false"><i class="glyphicon glyphicon-tasks"></i></a>
              </span>
              <input type="text" name="kanbanName" ng-model="newName" class="form-control" />
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-9">
        <ul class="nav navbar-nav pull-right" id="menu">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">Kanban <span class="caret"></span></a>
                <ul id="first_menu" class="dropdown-menu">
                    <li><a class="mpkNew" title="New Kanban board" ng-click="kanbanMenu.openNewKanban()"><i class="glyphicon glyphicon-briefcase"></i> New</a>
                    </li>
                    <li><a title="Downloadelete Kanban from local storage" ng-click="kanbanMenu.delete()"><i class="glyphicon glyphicon-remove-sign"></i> Delete</a></li>
                    <li><a title="Select Theme for the Kanban board" ng-click="kanbanMenu.openSwitchTheme()"><i class="glyphicon glyphicon-picture"></i> Themes</a></li>
                    <li><a title="Open archive" ng-click="kanbanMenu.openArchive(kanban)"><i class="glyphicon glyphicon-folder-open"></i> Archives</a></li>
                    <li role="presentation" class="divider"></li>
                    <li><a title="Export Kanban to file" ng-click="kanbanMenu.openExport(allKanbans, kanban.name)" href=""><i class="glyphicon glyphicon-save"></i> Export</a></li>
                    <li><a title="Import Kanban from file" ng-click="kanbanMenu.openImport()" href=""><i class="glyphicon glyphicon-open"></i> Import</a></li>
                    <li role="presentation" class="divider"></li>
                    <li><a title="Help" ng-click="showHelp=true" href=""><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav pull-right" id="cloudMenu">
          <li class="dropdown"> 
            <a class="dropdown-toggle" data-toggle="dropdown">Cloud <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a ng-click="cloudMenu.openCloudSetup()" href=""><i class="glyphicon glyphicon-wrench"></i> Setup</a></li>
              <li><a ng-click="cloudMenu.upload()" href=""><i class="glyphicon glyphicon-upload"></i> Upload</a></li>
              <li><a ng-click="cloudMenu.download()" href=""><i class="glyphicon glyphicon-download"></i> Download</a></li>
              <li><a href="https://my-personal-kanban.appspot.com/" target="blank"><i class="glyphicon glyphicon-hand-right"></i> Go to Cloud</a></li>
            </ul>
          </li>
        </ul>
        <div id="info" class="nav pull-right" ng-show="showInfo">
          <span id="error" class="error" ng-show="showError"><a ng-click="showInfo=false;showError=false;errorMessage=''">{{errorMessage}}</a></span>
          <span id="message" class="">{{infoMessage}}</span>
          <span id="spinner" class="pull-right" spin="spinConfig" spin-if="showSpinner"></span>
        </div>
        <div id="quickSwitch" class="pull-right form-group">
          <form>
            <select ng-model="switchTo" ng-options="name for name in switchToList" ng-change="switchToKanban(switchTo)">
              <option>Switch to ...</option>
            </select>
          </form>
        </div>
        <form class="nav navbar-nav pull-right" id="save_button" action="./" method="post">
            <input type="submit" value="Save Data" name="save_button">
            <input type="hidden" name="current_data">
        </form>
      </div>
    </div>
  </div>
</header>

<div class="container-fluid" id="kanban" ng-controller="KanbanController">
   <div id="columns">
      <div style="width: {{columnWidth}}%;display: inline-block;" ng-repeat="column in kanban.columns" data-columnindex="{{$index}}" id="column{{$index}}">
          <div class="column" style="background-color: {{column.settings.color}}">
            <div class="columnHeader">
               <a title="Column settings" ng-click="columnSettings(kanban, column)" ng-model="column" ng-hide="editing"><i class="glyphicon glyphicon-wrench"></i></a>
                <a title="Add card to column" class="pull-right" ng-click="addNewCard(column)" ng-hide="columnLimitsReached(column)"><i class="glyphicon glyphicon-plus"></i></a>
                <span>{{column.name}} ({{columnLimitsTextFor(column)}})</span>
            </div>
            <ul ng-class="sortableClassFor(column)" ui-sortable="{connectWith: '#kanban ul.cards'}" ng-model="column.cards" style="min-height:{{columnHeight}}px;max-height:{{columnHeight}}px;">
                <li class="card" ng-repeat="card in column.cards" style="background-color: #{{colorFor(card)}};">
                    <a class="pull-right" ng-click="delete(card, column)"><i class="glyphicon glyphicon-remove"></i></a>
                    <a class="pull-right" title="Archive" ng-click="archive(kanban, column, card)" ng-show="isLastColumn(column.name, kanban)"><i class="glyphicon glyphicon-folder-close"></i></a>
                    <a ng-click="openCardDetails(card)"><span>{{card.name}}</span></a>
                </li>
            </ul>
        </div>
      </div>
  </div>
  <div ng-controller="ColumnSettingsController">
    <mpk-modal title="Column settings" visible="showColumnSettings">
      <form  class="noMargin" name="columnSettings" ng-submit="update()">
          <div class="form-group">
            <label class="control-label" for="columnName">Column name</label>
            <div class="controls">
              <div>
                <input name="columnName" type="text" id="columnName" placeholder="Title on a card" ng-model="model.columnName" required class="form-control" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label" for="columnColor">Column color</label>
            <div class="controls">
              <div>
                <div class="col-md-3" style="padding-left: 0px;">
                  <input type="text" name="colorHex" value="Theme Default" class="form-control" ng-model="model.color"/>
                </div>
                <spectrum-colorpicker ng-model="model.color" options="{allowEmpty: true}" format="'hex'">
                </spectrum-colorpicker>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label" for="columnLimit">Card limit for this column</label>
            <div class="controls row">
              <div class="col-md-2">
                <input name="columnLimit" type="number" ng-model="model.limit" class="form-control" />
              </div>
            </div>
          </div> 
          <hr />         
          <div class="form-group">
            <button type="button" class="btn btn-sm btn-success" ng-click="addColumn('left')"><i class="glyphicon glyphicon-arrow-left"></i> Add column to the left</button>
            <button type="button" class="btn btn-sm btn-success pull-right" ng-click="addColumn('right')">Add column to the right <i class="glyphicon glyphicon-arrow-right"></i></button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger pull-left" ng-hide="model.showWarning" ng-click="delete()">Delete column</button>
            <button type="button" class="btn btn-danger pull-left" ng-show="model.showWarning" ng-click="delete()" ng-disabled="model.deleteDisabled">Click again to delete this column <i class="glyphicon glyphicon-exclamation-sign"></i></button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </mpk-modal>
  </div>
  <div ng-controller="NewKanbanCardController">
    <mpk-modal title="New card for column '{{kanbanColumnName}}'" visible="showNewCard">
      <form class="noMargin" name="newCardForm" ng-submit="addNewCard(newCard)">
        <div class="form-group">
            <label class="control-label" for="newCardTitle">Kanban card title</label>
            <div>
              <input type="text" id="newCardTitle" placeholder="Title on a card" ng-model="newCard.title" required focus-me class="cardInputs form-control" name="cardTitle"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="newCardDetails">More details <small>(optional)</small></label>
            <div>
                <textarea id="newCardDetails" ng-model="newCard.details" class="cardInputs form-control" rows="7">
                </textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Card color</label>
        </div>
        <div class="form-group">
            <color-selector options="colorOptions" ng-model="newCard.cardColor" prefix="newCardColor" class="colorSelector" show-hex-code="true"/>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </mpk-modal>
  </div>

  <div ng-controller="CardController">
    <mpk-modal title="Card details" visible="showCardDetails">
        <form class="noMargin" name="cardDetails">
          <div class="form-group">
              <label class="control-label" for="cardTitle">Kanban card title</label>
              <div class="controls">
                <ng-form ng-submit="editingTitle = false">
                <div class="input-group">
                  <input name="cardTitle" type="text" id="cardTitle" placeholder="Title on a card" ng-model="card.name" required class="form-control" ng-disabled="!editingTitle" focus-me />
                  <span class="input-group-btn">
                    <a title="OK" class="btn btn-default" ng-click="editingTitle = false" ng-hide="!editingTitle"><i class="glyphicon glyphicon-ok"></i></a>
                    <a title="Edit card title" class="btn btn-default" ng-click="editingTitle = true" ng-hide="editingTitle"><i class="glyphicon glyphicon-pencil"></i></a>
                  </span>
                </ng-form>
                </div>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label" for="cardTitle">Details</label>

              <div class="controls">
                  <div class="input-group">
                    <div class="form-control cardDetails cardInputs" ng-show="!editingDetails" ng-bind-html="card.details|linky|cardDetails"></div>
                    <textarea id="details" ng-model="card.details" class="cardInputs form-control" rows="7" ng-show="editingDetails"></textarea>
                    <span class="input-group-btn">
                      <a title="OK" ng-click="editingDetails = false" ng-hide="!editingDetails" class="btn btn-default"><i class="glyphicon glyphicon-ok"></i></a>
                      <a title="Edit card details" ng-click="editingDetails = true" ng-hide="editingDetails" class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i></a>
                    </span>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label">Card color</label>
          </div>
          <div class="form-group">
              <color-selector options="colorOptions" ng-model="card.color" prefix="editCardColor" class="colorSelector" show-hex-code="true" />
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </mpk-modal>
  </div>        
</div>

<div ng-controller="NewKanbanController">
  <mpk-modal title="New Kanban board" visible="showNewKanban">
    <form class="noMargin" name="newKanbanForm">
        <div class="form-group">
          <label class="control-label" for="kanbanNameFormField">Kanban name</label>
          <div>
            <input type="text" id="kanbanNameFormField" placeholder="Kanban name" class="form-control" ng-model="model.kanbanName" required focus-me />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" for="numberOfColumnsField">Number of columns</label>
          <div>
            <select id="numberOfColumnsField" ng-model="model.numberOfColumns" class="form-control" ng-options="number for number in [2,3,4,5,6,7,8,9]">
            </select>
          </div>
        </div>
        <hr />
        <div class="form-group">
          <label for="fromTemplate">Use existing Kanban as template</label>
          <div>
            <select id="fromTemplate" name="fromTemplate" ng-model="model.useTemplate" ng-options="name for name in model.kanbanNames" class="form-control">
              <option>Existing kanbans ...</option>
            </select>
          </div>
        </div>
        <div class="alert alert-info">
          <p>When using existing Kanban as template, <strong>number of columns</strong> and respective <strong>names</strong> will be used.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" ng-click="createNew()">Create new</button>
        </div>
    </form>
  </mpk-modal> 
</div>  

<!-- THIS IS THE HELP -->
<mpk-modal title="Help" visible="showHelp" modal-style="width:90%">
    <p><span class="version">My Personal Kanban Version: 0.8.0</span> from <a href="http://greggigon.github.io/my-personal-kanban/" target="blank">http://greggigon.github.io/my-personal-kanban/</a></p>
    <p>
      <strong>Personal Kanban</strong><br />
      <small>You can create <strong>new Kanban</strong> by selecting <strong>Kanban -> New</strong> from the Kanban menu. You can give it a name and select number of columns. You can also choose existing Kanban as a template for the new one.<br/>
      Once Kanban is created you can <strong>rename</strong> it by <strong>clicking it's title</strong> in the top bar. You can add new cards to the columns by pressing <strong>&plus;</strong> in the top right of the column. <br />
        You can give each <strong>column name</strong> and change it's colour by selecting <strong>Column settings icon</strong> next to it's name. <strong>(Number)</strong> next to column name indicates number of cards in the column.<br /><br />
        <strong>Cards are created</strong> with <strong>title</strong> and possible longer <strong>description</strong>. You can also <strong>select different colour</strong> for the card if you would like to categorize them somehow. Description will <strong>keep the new line formating</strong> and add <strong>clickable links</strong> if you include any. <br />
        You can <strong>open Card details</strong> by clicking on <strong>card title</strong>.You can <strong>edit Card details</strong> once opened.<br />
        You can <strong>drag card between columns</strong> and move them <strong>up and down</strong> column list.<br /><br />
        You can have <strong>multiple Kanbans</strong> and open/switch them from the <strong>Switch to ...</strong> dropdown, next to <strong>Cloud Menu</strong>. <br /> 
          You can <strong>select different style</strong> of Kanban board from <strong>Kanban -> Theme</strong> menu.<br />
          You can <strong>delete</strong> entire Kanban by selecting <strong>Kanban -> Delete</strong> from the menu.<br />
          Your Kanbans are automatically <strong>saved</strong> in your <strong>browser storage</strong>. <br /><br />
          If card is in the last colum you can Archive it. It will remove it from a Column but keep in Kanban. You can review
          your archived Cards via <strong>Kanban -> Archives</strong> menu. <br />
          You can also un-archive cards from Archive and permamently remove them.<br /><br />
          You can <strong>Export</strong> one or all Kanbans by selecting <strong>Kanban -> Export</strong> menu.<br />
          You can <strong>Import</strong> Kanban(s) from a JSON file. <strong>Not that Kanban with existing name, same as imported one will be replaced with the content of the new one.</strong><br /><br />
      </small>
    </p>
    <p>
      <strong>Cloud</strong><br />
      <small>
        You can use <strong>My Personal Kanban Cloud</strong> service that enables <strong>Upload and Download</strong> from Cloud. This service is offered free of charge. <br />
        You will need to create your <strong>cloud Kanban key</strong>. Follow instructions on <strong>Cloud -> Setup</strong>.<br />
        Your Kanban in the Cloud <strong>is stored Encrypted</strong>, that's why you should setup <strong>Encryption Key</strong>. The Encryption algorithm is <a href="http://en.wikipedia.org/wiki/Rabbit_(cipher)" target="blank" title="Rabbit encryption algorithm">Rabbit</a>.<br />
        You can <strong>upload Kanban</strong> by selecting <strong>Cloud -> Upload</strong> from the menu <br />.
        You can <strong>download Kanban</strong> by selecting <strong>Cloud -> Download</strong> from the menu. <br /><br />
        You can also use your own Local Cloud. There is server implementation provided at: <a href="https://github.com/greggigon/my-personal-kanban-server" target="blank">https://github.com/greggigon/my-personal-kanban-server</a>. Just select the option and provide URL for the Local Cloud service <strong>Cloud -> Setup -> Use own Local Cloud</strong>.
      </small>
    </p>
</mpk-modal>

<div ng-controller="SwitchThemeController">
  <mpk-modal title="Choose Kanban Theme" visible="showSwitchTheme">
    <form ng-submit="switchTheme()" name="selectTheme" class="noMargin">
        <div class="form-group">
          <label class="control-label" for="kanbanTheme">Themes to choose from</label>
        </div>
        <div class="row">
            <div class="col-md-5">
              <select class="form-control" name="selectedToOpen" ng-model="model.selectedTheme" required ng-options="t.css as t.name for t in model.themes" id="kanbanTheme">
              </select>
            </div>
            <div class="col-md-5">
              <img src="img/themes/{{model.selectedTheme}}.jpg" width="250" class="thumbnail" style="border: 1px solid black"/>
           </div>
        </div>
      <div class="modal-footer">
        <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit">Switch</button>
      </div>
    </form>
  </mpk-modal>
</div>

<div ng-controller="ArchiveController">
  <mpk-modal title="Cards Archive" visible="showArchive" modal-style="width: 90%;">
    <form class="form-horizontal" role="form">
      <div class="form-group has-success">
        <div class="col-md-offset-9 col-md-3">
          <input type="text" name="filterByName" placeholder="Filter by card name ..." ng-model="model.filterByName" class="form-control" />
        </div>
      </div>
    </form>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th></th>
          <th style="width: 25%">Archived on</th>
          <th style="width: 33%">Card title</th>
          <th style="width: 40%">Description</th>
        </tr>
      </thead>
        <tr ng-repeat="archivedCard in model.archived | archiveByCardName:model.filterByName">
          <td><input type="checkbox" name="selectedCards[]" value="archivedCard.card.name" ng-model="archivedCard.selected" /></td>
          <td>{{formatDate(archivedCard.archivedOn)}}</td>
          <td>{{archivedCard.card.name}}</td>
          <td>{{archivedCard.card.details}}</td>
        </tr>
      <tbody>
      </tbody>
    </table>
    <div class="modal-footer">
        <button class="btn btn-warning pull-left" ng-click="unarchiveSelected()">Un-archive selected</button>
        <button class="btn btn-danger pull-left" ng-click="deleteSelected()">Delete selected</button>
        <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
    </div>
</div>

<div ng-controller="ExportController">
  <mpk-modal visible="showExportModal" title="Export Kanban">
    <form name="exportKanban" class="noMargin">
      <div class="form-group">
        <label class="control-label" for="kanbanToExport">To export:</label>
        <div>
          <select id="kanbanToExport" ng-model="model.selectedKanban" class="form-control"
            ng-options="name for name in model.allKanbanNames" ng-disabled="model.exportAll">
          </select>
        </div>
      </div>
      <div class="form-group">
        <div>
          <div class="checkbox">
            <label>
              <input type="checkbox" ng-model="model.exportAll"> Export all Kanbans
            </label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit" ng-click="doExport()">Export</button>
      </div>
    </form>
  </mpk-modal>
</div>

<div ng-controller="ImportController">
  <mpk-modal visible="showImportModal" title="Import Kanban from file">
    <form name="importKanban" class="noMargin">
      <div class="form-group">
        <label class="control-label" for="kanbanToExport">Select file:</label>
        <input type="file" id="kanbanFile" name="kanbanFile" read-file ng-model="model.file" ng-change="model.fileSelected=true"/>
      </div>
      <div class="alert alert-warning">If you import Kanban with the name that already exists, all the content of existing Kanban will be lost.</div>
      <div class="modal-footer">
        <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit" ng-click="import()" ng-disabled="model.file==''">Import</button>
      </div>
    </form>
  </mpk-mdodal>
</div>


<!-- Cloud stuff from here -->
<div ng-controller="SetupCloudController">
  <mpk-modal title="Cloud Setup" visible="showCloudSetup">
    <form ng-submit="saveSettings()" name="cloudSettings" class="noMargin">
      <div class="alert alert-danger" ng-show="model.showConfigurationError">
        <p>In order to use Cloud Upload and Download functionality, you need to generate Kanban Key, a unique identifier that will be used to upload and download your Kanban. You can to that at My Personal Kanban web service <a href="http://my-personal-kanban.appspot.com" target="blank">http://my-personal-kanban.appspot.com</a></p>
      </div>
      <div class="form-group">
          <label class="control-label" for="kanbanKey">Kanban key:</label>
          <div>
            <input type="text" name="kanbanKey" id="kanbanKey" ng-model="model.kanbanKey" required class="kanbanKey form-control" placeholder="Cloud Kanban key" valid-key />
            <span class="text-danger" ng-show="cloudSettings.kanbanKey.$error.validKey">Provided key is invalid</span>
            <span class="text-danger" ng-show="cloudSettings.kanbanKey.$error.validKeyUnableToVerify">Unable to validate key. You might not be connected to the Internet or Network or unable to access <a href="http://my-personal-kanban.appspot.com" target="blank" ng-hide="model.useLocalCloud">http://my-personal-kanban.appspot.com</a> <a href="model.localCloudUrl">{{model.localCloudUrl}}</a></span>

         </div>
      </div>
      <div class="alert alert-info" ng-hide="model.showConfigurationError || model.useLocalCloud">
        <p>If you need to retrieve your kanban key or generate a new one go to <a href="http://my-personal-kanban.appspot.com" target="blank">http://my-personal-kanban.appspot.com</a></p>
      </div>
      <div class="form-group">
          <label class="control-label" for="cloudEncryptionKey">Cloud encryption key:</label>
          <div>
            <input type="text" name="cloudEncryptionKey" id="cloudEncryptionKey" class="kanbanKey form-control" ng-model="model.encryptionKey"/>
          </div>
      </div>
      <div class="alert alert-info">
        <p>This key will be used to Encrypt your Kanban when uploading into Cloud and Decrypt when downloading. It can be any number of characters.</p>
        <p><small>If you make changes to this key, make sure to download latest Kanban from Cloud first and upload after.</small></p> 
      </div>
    
      <div class="form-group">
        <label class="control-label">Local Cloud:</label>
        <div>
          <div class="checkbox">
            <label>
              <input type="checkbox" ng-model="model.useLocalCloud"> Use own Local Cloud
            </label>
          </div>
        </div>
      </div>

      <div class="form-group" ng-show="model.useLocalCloud">
          <label class="control-label" for="localCloudUrl">Local Cloud URL:</label>
          <div>
            <input type="text" name="localCloudUrl" id="localCloudUrl" class="form-control" ng-model="model.localCloudUrl" ng-required="model.useLocalCloud" />
          </div>
      </div>
      <div class="alert alert-info" ng-show="model.useLocalCloud">
        <p><small>You need to specify a valid URL for your Local Cloud service. Please provide hostname with port only (eg. https://my-personal-kanban.appspot.com). If the URL is valid your Kanban key should validate when you save Cloud settings.</small></p> 
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit" ng-disabled="cloudSettings.kanbanKey.$error.validKey">Save settings</button>
      </div>

    </form>
  </mpk-modal>
</div>

</script>
<footer></footer>

        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/angular/angular.min.js"></script>
        <script src="bower_components/angular-route/angular-route.min.js"></script>
        <script src="bower_components/angular-sanitize/angular-sanitize.min.js"></script>
        <script src="bower_components/spectrum/spectrum.js"></script>
        <script src="bower_components/angular-spectrum-colorpicker/dist/angular-spectrum-colorpicker.min.js"></script>
        <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
        <script src="bower_components/spinjs/spin.js"></script>
        <script src="bower_components/FileSaver/FileSaver.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="scripts/themes.82ae94b8.js"></script>

        <script src="scripts/scripts.9bb3f574.js"></script>
</body>
</html>
