# Mini-Briefing Grafik Webseite Alex Mayer

## Font
Slabo 13px (Google)
### Wir hosten die Fonts aus DSGVO-Gründen am eigenen Server mit
https://google-webfonts-helper.herokuapp.com/fonts/slabo-13px?subsets=latin

### Screendesigns
Das PDF dient zum Copy&Pasten des Texts und verwendet die Schriftgrößen 33pts, 20pts, 13pts, 12pts.

Die pts beziehen sich auf die Größe der Schrift im PDF-Dokument als Anhaltspunkt zur Einhaltung der Proportionen. Dh. man muss sich das gerade bei einem PDF-Screendesign immer am Bildschirm ansehen, wie es funktionieren kann und unter Einhaltung der Relationen tweaken. Die absoluten Zahlen sind oft nicht direkt übertragbar.
pts würde ich als CSS-Einheit sowieso nur für gedrucktes HTML/CSS verwenden. Ich nehme gerne `rem` und verändere dann für die kleinen Viewports ('mobile') die `font-size` in % im root-Knoten:
```css
html { font-size: 80%;}
```
Aber auch ems und px sind natürlich möglich.

Zum Abmessen verwende ich das Chrome Addon 'Web Developer' (Ruler, Line Guides), damit ich die Relationen dann bestimmen kann.

## Primary Color
blue: #009ee3

## Anforderungen
### Responsives Webdesign
Achte auf den Wechsel von full-width-Containern, die die ganze Browser-Breite umspannen (Bsp. Hero Image im Header), und zentrierten max-width-Containern (Bsp. Main Contents), die eine maximale Breite (z.B. 80rem) haben dürfen.

### Hamburger Menü Mobile (animiert, Farbe des Burgers in blue)
Verwende dazu das node-Package https://www.npmjs.com/package/hamburgers.
Die Animation lösen wir aus mit dem Checkbox-Hack oder mit ein paar Zeilen JavaScript.

## Tipps aus der Praxis
Die responsive Umsetzung eines Screendesigns ist Standard, also machen wir das auch.
Es kommt in der Praxis auch immer noch vor, dass man nur einen View ('Desktop') bekommt, und sich um 'mobile' selber kümmern muss.

