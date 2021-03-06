<div>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.8.3/themes/base/jquery-ui.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.8.3/jquery-ui.js"></script>
 
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Tab 1</a></li>
            <li><a href="#tabs-2">Tab 2</a></li>
            <li><a href="#tabs-3">Tab 3</a></li>
            <li><a href="#tabs-4">Tab 4</a></li>
            <li><a href="#tabs-5">Tab 5</a></li>
        </ul>
        <div id="tabs-1">
            Tab 1 Content
        </div>
        <div id="tabs-2">
            Tab 2 Content
        </div>
        <div id="tabs-3">
            Tab 3 Content
        </div>
        <div id="tabs-4">
            Tab 4 Content
        </div>
        <div id="tabs-5">
            Tab 5 Content
        </div>
    </div>
    <br />
    <Button class="btn btn-primary" ID="btnPrevious"
      Width="50px" Height="50px" >Back
    <Button class="btn btn-primary" ID="btnNext"  Width="50px" Height="50px"
    > Next
</div>

<script type="text/javascript">
        var currentTab = 0;
        $(function () {
            $("#tabs").tabs({
                select: function (e, i) {
                    currentTab = i.index;
                }
            });
        });
        $("#btnNext").live("click", function () {
            var tabs = $('#tabs').tabs();
            var c = $('#tabs').tabs("length");
            currentTab = currentTab == (c - 1) ? currentTab : (currentTab + 1);
            tabs.tabs('select', currentTab);
            $("#btnPrevious").show();
            if (currentTab == (c - 1)) {
                $("#btnNext").hide();
            } else {
                $("#btnNext").show();
            }
            return false;
        });
        $("#btnPrevious").live("click", function () {
            var tabs = $('#tabs').tabs();
            var c = $('#tabs').tabs("length");
            currentTab = currentTab == 0 ? currentTab : (currentTab - 1);
            tabs.tabs('select', currentTab);
            if (currentTab == 0) {
                $("#btnNext").show();
                $("#btnPrevious").hide();
            }
            if (currentTab < (c - 1)) {
                $("#btnNext").show();
            }
            return false;
        });
    </script>