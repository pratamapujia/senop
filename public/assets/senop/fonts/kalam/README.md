# Installing Webfonts
Follow these simple Steps.

## 1.
Put `kalam/` Folder into a Folder called `fonts/`.

## 2.
Put `kalam.css` into your `css/` Folder.

## 3. (Optional)
You may adapt the `url('path')` in `kalam.css` depends on your Website Filesystem.

## 4.
Import `kalam.css` at the top of you main Stylesheet.

```
@import url('kalam.css');
```

## 5.
You are now ready to use the following Rules in your CSS to specify each Font Style:
```
font-family: Kalam-Light;
font-family: Kalam-Regular;
font-family: Kalam-Bold;
font-family: Kalam-Variable;

```
## 6. (Optional)
Use `font-variation-settings` rule to controll axes of variable fonts:
wght 300.0

Available axes:
'wght' (range from 300.0 to 700.0

