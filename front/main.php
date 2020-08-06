<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">健康新知</li>
    <li class="TabbedPanelsTab" tabindex="0">菸害防治</li>
    <li class="TabbedPanelsTab" tabindex="0">癌症防治</li>
    <li class="TabbedPanelsTab" tabindex="0">慢性病防治</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent"><?=nl2br($News->find(['type'=>1])['text']);?></div>
    <div class="TabbedPanelsContent"><?=nl2br($News->find(['type'=>2])['text']);?></div>
    <div class="TabbedPanelsContent"><?=nl2br($News->find(['type'=>3])['text']);?></div>
    <div class="TabbedPanelsContent"><?=nl2br($News->find(['type'=>4])['text']);?></div>
  </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>



