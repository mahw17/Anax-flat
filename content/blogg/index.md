---
views:
    main:
        template: default/article
        data:
            class: blog

    byline: false
    share-this: false
    block-about: false
    article-toc: false

    blog-list:
        region: main
        template: default/blog-list
        sort: 2
        data:
            dateFormat: j F Y
            meta:
                type: toc
                items: 10

    blog-toc:
        region: sidebar-right
        template: default/blog-toc
        sort: 2
        data:
            meta:
                type: copy
                view: blog-list

...
Min bildblogg
===========================

####Min bildblogg

Dagens foto presenteras med en kort beskrivning om hur det gick till när bilden togs.

I varje blogginlägg visas bilden ur olika aspekter, minst fyra olika varianter.

Själva bilden och dess omständigheter (hur den togs, varför, med vilken kamera
och inställningar) kommer att beskrivas.

Cimage har använts för att beskära eller förändra bilden.
