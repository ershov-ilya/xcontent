<?php
//$end = '([;\s,\.\-)])/ui';
//$end = '/ui';
// 4 слова
//газовый водонагреватель как выбрать
$REG[] = '/(газов[а-яё]*\sводонагреват[а-яё]*\sкак\sвыб[а-яё]*)/ui';
$LINK[] = '/ru/press-czentr/vopros-otvet/kak-vyibrat-gazovyij-vodonagrevatel';

//аксессуары для газового котла
$REG[] = '/(аксесс[а-яё]*\sдля\sгазов[а-яё]*\sкотл[а-яё]*)/ui';
$LINK[] = '/ru/catalog/aksessuaryi/';

// (настенные) (двухконтурные) газовые котлы
$REG[] = '/((настен[а-яё]*\s){0,1}(двухконтурн[а-яё]*\s){0,1}газов[а-яё]*\sкот[а-яё]*)/ui';
$LINK[] = '/ru/catalog/gazovie-cotlu/';

//  котлы газовые настенные|напольные
$REG[] = '/(кот[а-яё]*\sгазов[а-яё]*(\sнастен[а-яё]*|\sнапольн[а-яё]*){0,1})/ui';
$LINK[] = '/ru/catalog/gazovie-cotlu/';


// 3 слова
// продажа газовая колонка нева ремонт
$REG[] = '/((прод[а-яё]*\s){0,1}газов[а-яё]*\sколон[а-яё]*\s(нева\s){0,1}(ремонт[а-яё]*\s){0,1})/ui';
$LINK[] = '/ru/press-czentr/novosti/2012/gas-water-heaters-neva';

// продажа колонка газовая нева ремонт
$REG[] = '/((прод[а-яё]*\s){0,1}колон[а-яё]*\sгазов[а-яё]*\s(нева\s){0,1}(ремонт[а-яё]*\s){0,1})/ui';
$LINK[] = '/ru/press-czentr/novosti/2012/gas-water-heaters-neva';

// газовые водонагреватели Neva (Lux)
$REG[] = '/(газов[а-яё]*\sводонагрев[а-яё]*\sNEVA([\s]{0,1}LUX){0,1})/ui';
$LINK[] = '/ru/catalog/gazovie-vodonagrevateli/neva/';

// газовые водонагреватели нева
$REG[] = '/(газов[а-яё]*\sводонагрев[а-яё]*\sнева)/ui';
$LINK[] = '/ru/catalog/gazovie-vodonagrevateli/neva/';

// (газовое) оборудование опт
$REG[] = '/((газов[а-яё]*\s){0,1}оборуд[а-яё]*\sопт[а-яё]*)/ui';
$LINK[] = '/ru/napravleniya-deyatelnosti/optovaya-torgovlya-gazovyim-oborudovaniem/';


// 2 слова
// газовые водонагреватели
$REG[] = '/(газов[а-яё]*\sводонагрев[а-яё]*)/ui';
$LINK[] = '/ru/catalog/gazovie-vodonagrevateli/';

// 2-1 слово
// Нева люкс
$REG[] = '/(Нева[\s]{0,1}люкс)/ui';
$LINK[] = '/ru/catalog/brands/nevalux/';

// Мастер Газ
$REG[] = '/(Мастер\sГаз[а-яё]*)/ui';
$LINK[] = '/ru/catalog/gazovie-cotlu/master-gas/';

// Вектор Люкс
$REG[] = '/(Вектор[\s]{0,1}Люкс)/ui';
$LINK[] = '/ru/catalog/brands/vektor-lux-eco/';

// Master Gas
$REG[] = '/(Master\sGas[а-яё]*)/ui';
$LINK[] = '/ru/catalog/gazovie-cotlu/master-gas/';

// Vektor Lux (Eco)
$REG[] = '/(VEKTOR[\s]{0,1}Lux(\sEco){0,1})/ui';
$LINK[] = '/ru/catalog/brands/vektor-lux-eco/';

// Neva lux
$REG[] = '/(NEVA[\s]{0,1}LUX)/ui';
$LINK[] = '/ru/catalog/brands/nevalux/';




