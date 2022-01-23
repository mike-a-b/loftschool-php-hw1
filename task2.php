<?php
/*Дана задача:
    На школьной выставке 80 рисунков. 23 из них выполнены фломастерами, 40 карандашами, а остальные — красками.
    Сколько рисунков, выполненные красками, на школьной выставке?
    Описать и вывести условия, решение этой задачи на PHP. Все предоставленные числа из пункта 1 должны быть указаны в
    константах.
*/

const pictCounts = 80;
const pen = 23;
const pencil = 40;

echo "Красками на выставке выполнено ". (pictCounts - (pen + pencil)). " рисунков";
