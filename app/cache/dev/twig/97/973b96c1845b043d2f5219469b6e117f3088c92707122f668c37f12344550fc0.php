<?php

/* @intranet/TaskTemplates/mainTaskDialog.tmpl.html */
class __TwigTemplate_d041eb2205e8814667d797f99ddbf9c8b67f990c2948d9afa3b575f4120bb49a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_925934322aa1ef069f96a96f8cf2b40763940d903550fabd00e135bfaf391087 = $this->env->getExtension("native_profiler");
        $__internal_925934322aa1ef069f96a96f8cf2b40763940d903550fabd00e135bfaf391087->enter($__internal_925934322aa1ef069f96a96f8cf2b40763940d903550fabd00e135bfaf391087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/TaskTemplates/mainTaskDialog.tmpl.html"));

        // line 1
        echo "
<md-dialog ng-cloak flex=\"50\" ng-init=\"getInfo()\">
    <form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("intranet_edittask");
        echo "\" method=\"post\" id=\"taskUpdateForm\">
        <md-toolbar>
          <div class=\"md-toolbar-tools\">
            <h2>Task: {[{allData.taskData[0].title}]}</h2><!--task[]-->
            <span flex></span>
            <md-button class=\"md-icon-button\" ng-click=\"closeDialog()\">
              <md-icon aria-label=\"Close dialog\"></md-icon><!--md-svg-src=\"icons/ic_close_white.svg\" -->
            </md-button>
          </div>
        </md-toolbar>
        <md-dialog-content>
            <div class=\"md-dialog-content\">
                <md-list>
                    <md-list-item>
                        <md-input-container flex-gt-xs>
                            <label>Task Title</label>
                            <input class=\"\" name=\"taskTitle\" ng-model=\"allData.taskData[0].title\" ng-disabled=\"userRol == 'developer'\">
                        </md-input-container>
                    </md-list-item>
                    <md-list-item>
                        <md-input-container flex-gt-xs>
                            <label>Task Description</label>
                            <textarea class=\"dialogTextarea\" rows=\"4\" name=\"taskContent\" ng-model=\"allData.taskData[0].content\" ng-disabled=\"userRol == 'developer'\"></textarea>
                        </md-input-container>
                    </md-list-item>
                    <md-list-item>
                        <div layout-wrap layout=\"row\" ng-if=\"userRol != 'developer'\">
                            <div flex=\"50\" ng-repeat=\"user in allUsers\">
                                <md-checkbox ng-checked=\"alreadyIn(user)\" ng-click=\"toggle(user)\" name=\"{[{user.login}]}\">
                                    {[{user.nameU}]} {[{user.surnameU}]}
                                </md-checkbox>
                            </div>
                        </div>
                        <div layout-wrap layout=\"column\" ng-if=\"userRol == 'developer'\" style=\"margin-bottom: 15px\">
                            <span style=\"font-weight: bold\">Users in this task:</span><br>
                            <div flex=\"50\" ng-repeat=\"user in usersInTaskShownToDeveloper\" style=\"margin-left: 10px\">
                                    {[{user.nameU}]} {[{user.surnameU}]}
                            </div>
                        </div>
                    </md-list-item>
                    <md-list-item>
                        <span flex></span>
                        <md-button ng-click=\"update()\" class=\"md-raised md-primary\" ng-if=\"userRol != 'developer' && task\">Update</md-button>
                        <md-button ng-click=\"create()\" class=\"md-raised md-primary\" ng-if=\"userRol != 'developer' && !task\">Create</md-button>
                        <md-button ng-click=\"closeDialog()\" class=\"md-raised md-primary\" ng-if=\"userRol == 'developer'\">OK</md-button>
                    </md-list-item>
                </md-list>
            </div>
        </md-dialog-content>
    </form>
</md-dialog>

<!--<input type=\"text\"  style=\"background-color: rgb(63,81,181); color: white; border: none;\">-->";
        
        $__internal_925934322aa1ef069f96a96f8cf2b40763940d903550fabd00e135bfaf391087->leave($__internal_925934322aa1ef069f96a96f8cf2b40763940d903550fabd00e135bfaf391087_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/TaskTemplates/mainTaskDialog.tmpl.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* */
/* <md-dialog ng-cloak flex="50" ng-init="getInfo()">*/
/*     <form action="{{ path('intranet_edittask') }}" method="post" id="taskUpdateForm">*/
/*         <md-toolbar>*/
/*           <div class="md-toolbar-tools">*/
/*             <h2>Task: {[{allData.taskData[0].title}]}</h2><!--task[]-->*/
/*             <span flex></span>*/
/*             <md-button class="md-icon-button" ng-click="closeDialog()">*/
/*               <md-icon aria-label="Close dialog"></md-icon><!--md-svg-src="icons/ic_close_white.svg" -->*/
/*             </md-button>*/
/*           </div>*/
/*         </md-toolbar>*/
/*         <md-dialog-content>*/
/*             <div class="md-dialog-content">*/
/*                 <md-list>*/
/*                     <md-list-item>*/
/*                         <md-input-container flex-gt-xs>*/
/*                             <label>Task Title</label>*/
/*                             <input class="" name="taskTitle" ng-model="allData.taskData[0].title" ng-disabled="userRol == 'developer'">*/
/*                         </md-input-container>*/
/*                     </md-list-item>*/
/*                     <md-list-item>*/
/*                         <md-input-container flex-gt-xs>*/
/*                             <label>Task Description</label>*/
/*                             <textarea class="dialogTextarea" rows="4" name="taskContent" ng-model="allData.taskData[0].content" ng-disabled="userRol == 'developer'"></textarea>*/
/*                         </md-input-container>*/
/*                     </md-list-item>*/
/*                     <md-list-item>*/
/*                         <div layout-wrap layout="row" ng-if="userRol != 'developer'">*/
/*                             <div flex="50" ng-repeat="user in allUsers">*/
/*                                 <md-checkbox ng-checked="alreadyIn(user)" ng-click="toggle(user)" name="{[{user.login}]}">*/
/*                                     {[{user.nameU}]} {[{user.surnameU}]}*/
/*                                 </md-checkbox>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div layout-wrap layout="column" ng-if="userRol == 'developer'" style="margin-bottom: 15px">*/
/*                             <span style="font-weight: bold">Users in this task:</span><br>*/
/*                             <div flex="50" ng-repeat="user in usersInTaskShownToDeveloper" style="margin-left: 10px">*/
/*                                     {[{user.nameU}]} {[{user.surnameU}]}*/
/*                             </div>*/
/*                         </div>*/
/*                     </md-list-item>*/
/*                     <md-list-item>*/
/*                         <span flex></span>*/
/*                         <md-button ng-click="update()" class="md-raised md-primary" ng-if="userRol != 'developer' && task">Update</md-button>*/
/*                         <md-button ng-click="create()" class="md-raised md-primary" ng-if="userRol != 'developer' && !task">Create</md-button>*/
/*                         <md-button ng-click="closeDialog()" class="md-raised md-primary" ng-if="userRol == 'developer'">OK</md-button>*/
/*                     </md-list-item>*/
/*                 </md-list>*/
/*             </div>*/
/*         </md-dialog-content>*/
/*     </form>*/
/* </md-dialog>*/
/* */
/* <!--<input type="text"  style="background-color: rgb(63,81,181); color: white; border: none;">-->*/
