---
views:
    sidebarGrid:
        region: sidebar-right
        template: default/content
        sort: 1
        data:
            meta:
                type: content
                route: block/sidebarGrid

...
Vertikalt grid, del av KMOM03 i kursen *Design*
===============================

Krav
----

Del 1 Vertikalt grid
--------------------

Kopiera de grid-filer som finns i exemplet under example/grid/fluid/less/grid*. Lägg till dem så att de finns med i ditt tema. Lägg till båda i din modules.less, men kommentera bort den ena så att du bara har ett grid aktivt.

Skapa en fil modules/layout.less där du stylar din Anax Flat enligt ditt valda grid. Förslagsvis använder du mellan 960px till 1200px som största storlek och du använder 12 eller 24 kolumner, eller välj efter eget huvud. Detta är nu basen i ditt aktiva tema. Kommentera bort din tidigare modules/regions.less så den inte används från modules.less.

Skapa en modules/grid-helpers.less och lägg en mixin som visualiserar gridet. Mixinen skall heta .showGrid() och ta ett argument som är gridets maximala storlek. De bilder du behöver lägger du enklast i htdocs/img/grid.

Skapa en ny sida content/grid.md. Lägg in den sidan i menyn. När man tittar på den sidan skall gridet visas i bakgrunden. Se till att sidan är fylld med innehåll. Sidan skall innehålla minst en sidebar (sidebar-left eller sidebar-right) med innehåll.

Gör ditt tema responsivt med media queries och förberett för mindre skärmar.

Lägg till så att ?vgrid fungerar på godtycklig sida likt [dbwebb.se/?vgrid](https://dbwebb.se/?vgrid)
