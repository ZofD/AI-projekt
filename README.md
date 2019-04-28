# AI-projekt
Projekt dla profesora Paji

###spis treści
Proste założenia
Struktura plików HTML
Schemat klasy "container" w pliku index.html
Schemat klasy "container" w plikach kategori gramatycznej
Schemat klasy "container" w plikach kategori słownikowej
Schemat klasy "container" w plikach kategori kulturowej
## Proste założenia
Poszczegulne typy plików powinny posiadać swoje katalogi.

Każdy szablon HTML powinien posiadać własny plik CSS.
## Struktura plików HTML
```html
<HTML>
    <HEAD>
    </HEAD>
    <BODY>
        <div id = "container">
            <header>
                <img src = "img/logo.png" />
            </header>
            <nav>
                <div><!--x6-->
                    <a>...</a>
                </div>
            </nav>
            <div class = "content">
                ...
            </div>
            <footer>
                ...
            </footer>
        </div>
    </BODY>
</HTML>
```
## Schemat klasy "container" w pliku index.html
```html
<div class = "content">
    <div class = "component"><!--x9-->
>odd
        <div class = "img">
            <img src = "..." />
        </div>
        <div class = "text">
            <h1>...</h1>
            <h2>...</h2>
            <div class = "button"><!--opcjonalnie-->
                <a>...</a>
            </div>
        </div>
>even
        <div class = "text">
            <h1>...</h1>
            <h2>..</h2>
            <div class = "button"><!--opcjonalnie-->
                <a>...</a>
            </div>
        </div>
        <div class = "img">
            <img src = "..." />
        </div>
    </div>
</div>
```
## Schemat klasy "container" w plikach kategori gramatycznej
```html
<div class = "content">
    <div class = "component_right">
        <h1>...</h1><!--tytuł podstrony-->
        <div class = "subject"><!--x(w zależności od działu)-->
            <h2>...</h2><!--temat-->
            <h3>...</h3><!--nagłówek-->
            <p>...</p><!--treść-->
            <!---h3 i p mogą być w liście ul-->
            ...
            <div class = "button">
                <a>...</a>
            </div>
        </div>
    </div>
    <div class = "component_left">
        <h2>...</h2>
        <a>
            <p>...</p>
        </a>
        ...
        <h2>...</h2>
        ...
    </div>
</div>
```
## Schemat klasy "container" w plikach kategori słownikowej
```html
<div class = "content">
    <div class = "component_right">
        <!---do poprawy-->
    </div>
    <div class = "component_left">
        <h2>...</h2>
        <a>
            <p>...</p>
        </a>
        ...
        <h2>...</h2>
        ...
    </div>
</div>
```
## Schemat klasy "container" w plikach kategori kulturowej
```html
<div class = "content">
    <div class = "component_right">
        <h1>...</h1><!--tytuł podstrony-->
        <div class = "subject"><!--x(w zależności od działu)-->
            <h2>...</h2><!--temat-->
            <p>...</p><!--treść-->
        </div>
    </div>
    <div class = "component_left">
        <h2>...</h2>
        <a>
            <p>...</p>
        </a>
        ...
        <h2>...</h2>
        ...
    </div>
</div>
```
