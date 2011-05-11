{pageaddvar name="stylesheet" value="system/Admin/style/minitabs.css"}
<h2>{gt text="Edit theme"} {$themeinfo.displayname}</h2>
{if $themeinfo.type eq 3}
<ul id="theme_modifymenu" class="minitabs">
    <li><a {if $func eq 'modify'}class="active"{/if} href="{modurl modname=Theme type=admin func=modify themename=$themename}">{gt text="Settings"}</a></li>
    <li><a {if $func eq 'pageconfigurations'}class="active"{/if} href="{modurl modname=Theme type=admin func=pageconfigurations themename=$themename}">{gt text="Page configurations"}</a></li>
    <li><a {if $func eq 'palettes'}class="active"{/if} href="{modurl modname=Theme type=admin func=palettes themename=$themename}">{gt text="Colour palettes"}</a></li>
    <li><a {if $func eq 'variables'}class="active"{/if} href="{modurl modname=Theme type=admin func=variables themename=$themename}">{gt text="Variables"}</a></li>
</ul>
{/if}