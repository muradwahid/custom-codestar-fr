<?php
/**
 * Plugin Name: Custom CodeStar Fr
 * Description: Description of the Custom CodeStar Fr.
 * Version: 1.0.0
 * Author: bPlugins LLC
 * Author URI: http://bplugins.com
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain: custom-codestar-fr
 */

// ABS PATH
if ( !defined( 'ABSPATH' ) ) { exit; }

// Constant
define( 'CCFR_VERSION', isset( $_SERVER['HTTP_HOST'] ) && 'localhost' === $_SERVER['HTTP_HOST'] ? time() : '1.0.0' );
define( 'CCFR_DIR_URL', plugin_dir_url( __FILE__ ) );
define( 'CCFR_DIR_PATH', plugin_dir_path( __FILE__ ) );

$faRocketIcon = "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' height='15px'><path d='M156.6 384.9L125.7 354c-8.5-8.5-11.5-20.8-7.7-32.2c3-8.9 7-20.5 11.8-33.8L24 288c-8.6 0-16.6-4.6-20.9-12.1s-4.2-16.7 .2-24.1l52.5-88.5c13-21.9 36.5-35.3 61.9-35.3l82.3 0c2.4-4 4.8-7.7 7.2-11.3C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-3.5 2.4-7.3 4.8-11.3 7.2v82.3c0 25.4-13.4 49-35.3 61.9l-88.5 52.5c-7.4 4.4-16.6 4.5-24.1 .2s-12.1-12.2-12.1-20.9V380.8c-14.1 4.9-26.4 8.9-35.7 11.9c-11.2 3.6-23.4 .5-31.8-7.8zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z' /></svg>";
$circlePlus ="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' height='15px'><path d='M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z' /></svg>";
$rectangle ="<svg stroke='currentColor' fill='currentColor' strokeWidth='0' viewBox='0 0 256 256' height='15px' xmlns='http://www.w3.org/2000/svg'><path d='M216,42H40A14,14,0,0,0,26,56V200a14,14,0,0,0,14,14H216a14,14,0,0,0,14-14V56A14,14,0,0,0,216,42Zm2,158a2,2,0,0,1-2,2H40a2,2,0,0,1-2-2V56a2,2,0,0,1,2-2H216a2,2,0,0,1,2,2Z'></path></svg>";
$faList ="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' height='15px'><path d='M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z' /></svg>";
$faCheckbox="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' height='15px'><path d='M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z' /></svg>";
$faRadio ="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' height='15px'><path d='M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-352a96 96 0 1 1 0 192 96 96 0 1 1 0-192z' /></svg>";
$faClone ="<svg stroke='currentColor' fill='currentColor' strokeWidth='0' viewBox='0 0 512 512' height='15px' xmlns='http://www.w3.org/2000/svg'><path d='M464 0H144c-26.51 0-48 21.49-48 48v48H48c-26.51 0-48 21.49-48 48v320c0 26.51 21.49 48 48 48h320c26.51 0 48-21.49 48-48v-48h48c26.51 0 48-21.49 48-48V48c0-26.51-21.49-48-48-48zM362 464H54a6 6 0 0 1-6-6V150a6 6 0 0 1 6-6h42v224c0 26.51 21.49 48 48 48h224v42a6 6 0 0 1-6 6zm96-96H150a6 6 0 0 1-6-6V54a6 6 0 0 1 6-6h308a6 6 0 0 1 6 6v308a6 6 0 0 1-6 6z'></path></svg>";
$faBar ="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' height='15px'><path d='M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z' /></svg>";
$faUpload="<svg stroke='currentColor' fill='currentColor' strokeWidth='0' version='1.1' viewBox='0 0 16 16' height='15px' xmlns='http://www.w3.org/2000/svg'><path d='M7.5 11h-7.5v4h15v-4h-7.5zM14 13h-2v-1h2v1zM3.5 5l4-4 4 4h-2.5v5h-3v-5z'></path></svg>";
$faCode ="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512' height='15px'><path d='M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z' /></svg>";
$faDroplet ="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512' height='15px'><path d='M192 512C86 512 0 426 0 320C0 228.8 130.2 57.7 166.6 11.7C172.6 4.2 181.5 0 191.1 0h1.8c9.6 0 18.5 4.2 24.5 11.7C253.8 57.7 384 228.8 384 320c0 106-86 192-192 192zM96 336c0-8.8-7.2-16-16-16s-16 7.2-16 16c0 61.9 50.1 112 112 112c8.8 0 16-7.2 16-16s-7.2-16-16-16c-44.2 0-80-35.8-80-80z' /></svg>";
$circleHalfStroke="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' height='15px'><path d='M448 256c0-106-86-192-192-192V448c106 0 192-86 192-192zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z' /></svg>";
$faAsterisk="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512' height='15px'><path d='M192 32c17.7 0 32 14.3 32 32V199.5l111.5-66.9c15.2-9.1 34.8-4.2 43.9 11s4.2 34.8-11 43.9L254.2 256l114.3 68.6c15.2 9.1 20.1 28.7 11 43.9s-28.7 20.1-43.9 11L224 312.5V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V312.5L48.5 379.4c-15.2 9.1-34.8 4.2-43.9-11s-4.2-34.8 11-43.9L129.8 256 15.5 187.4c-15.2-9.1-20.1-28.7-11-43.9s28.7-20.1 43.9-11L160 199.5V64c0-17.7 14.3-32 32-32z' /></svg>";
$faSliders ="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' height='15px'><path d='M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61 19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z' /></svg>";
$sortNumericDown="<svg stroke='currentColor' fill='currentColor' strokeWidth='0' viewBox='0 0 448 512' height='15px' xmlns='http://www.w3.org/2000/svg'><path d='M304 96h16v64h-16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h96a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16h-16V48a16 16 0 0 0-16-16h-48a16 16 0 0 0-14.29 8.83l-16 32A16 16 0 0 0 304 96zm26.15 162.91a79 79 0 0 0-55 54.17c-14.25 51.05 21.21 97.77 68.85 102.53a84.07 84.07 0 0 1-20.85 12.91c-7.57 3.4-10.8 12.47-8.18 20.34l9.9 20c2.87 8.63 12.53 13.49 20.9 9.91 58-24.76 86.25-61.61 86.25-132V336c-.02-51.21-48.4-91.34-101.85-77.09zM352 356a20 20 0 1 1 20-20 20 20 0 0 1-20 20zm-176-4h-48V48a16 16 0 0 0-16-16H80a16 16 0 0 0-16 16v304H16c-14.19 0-21.36 17.24-11.29 27.31l80 96a16 16 0 0 0 22.62 0l80-96C197.35 369.26 190.22 352 176 352z'></path></svg>";
$arrowAlt="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' height='15px'><path d='M278.6 9.4c-12.5-12.5-32.8-12.5-45.3 0l-64 64c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8h32v96H128V192c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9l-64 64c-12.5 12.5-12.5 32.8 0 45.3l64 64c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V288h96v96H192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l64 64c12.5 12.5 32.8 12.5 45.3 0l64-64c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8H288V288h96v32c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l64-64c12.5-12.5 12.5-32.8 0-45.3l-64-64c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6v32H288V128h32c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-64-64z' /></svg>";
$faSwitch="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512' height='15px'><path d='M192 64C86 64 0 150 0 256S86 448 192 448H384c106 0 192-86 192-192s-86-192-192-192H192zm192 96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z' /></svg>";
$faStar="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512' height='15px'><path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z' /></svg>";
$faMap ="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512' height='15px'><path d='M384 192c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192z' /></svg>";
$faLink="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512' height='15px'><path d='M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z' /></svg>";
$faCalender="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' height='15px'><path d='M96 32V64H48C21.5 64 0 85.5 0 112v48H448V112c0-26.5-21.5-48-48-48H352V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V64H160V32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192H0V464c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V192z' /></svg>";
$faGrid="<svg stroke='currentColor' fill='currentColor' strokeWidth='0' viewBox='0 0 16 16' height='15px' xmlns='http://www.w3.org/2000/svg'><path d='M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z'></path></svg>";
$faEllipsis="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' height='15px'><path d='M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z' /></svg>";
$faBranch="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' height='15px'><path d='M80 104a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm80-24c0 32.8-19.7 61-48 73.3v87.8c18.8-10.9 40.7-17.1 64-17.1h96c35.3 0 64-28.7 64-64v-6.7C307.7 141 288 112.8 288 80c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3V160c0 70.7-57.3 128-128 128H176c-35.3 0-64 28.7-64 64v6.7c28.3 12.3 48 40.5 48 73.3c0 44.2-35.8 80-80 80s-80-35.8-80-80c0-32.8 19.7-61 48-73.3V352 153.3C19.7 141 0 112.8 0 80C0 35.8 35.8 0 80 0s80 35.8 80 80zm232 0a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zM80 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z' /></svg>";
$faCircleCheck="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' height='15px'><path d='M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z' /></svg>";
$faRotateRight = "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' height='15px'><path d='M463.5 224H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1c-87.5 87.5-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5z' /></svg>";
$faShieldHalf = "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' height='15px'><path d='M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8l0 0z' /></svg>";
$faBold = "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' height='15px'><path d='M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288H175.5L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7H272.5L349.4 44.6z' /></svg>";
$faCaretLeft = "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 256 512' height='15px'><path d='M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z' /></svg>";


define( 'BPL_OPTIONS', array(
  'id' => 'bplData',
  'title' => 'bPlugins Settings',
  // 'saveType' => '', // 'serialized' : 'nested'
  'sections' => array(
      array(
          'name' => 'overview',
          'title' => 'Overview',
          'icon' => $faRocketIcon,
          'fields' => array(
              array(
                  'id' => 'text',
                  'title' => 'Text',
                  'field' => 'text',
                  'attributes'=>array(
                    'style'=>array('width'=>'50%')
                  )
              ),
              array(
                  'id' => 'textarea',
                  'title' => 'Textarea',
                  'field' => 'textarea',
              ),
              array(
                  'id' => 'upload',
                  'title' => 'Upload',
                  'field' => 'inlineupload',
              ),
              array(
                  'id' => 'switcher',
                  'title' => 'Switcher',
                  'field' => 'switch',
                  'label' => 'The label text of the switcher.',
                  'labelPosition'=>'right'
              ),
              array(
                  'id' => 'color',
                  'title' => 'Color',
                  'field' => 'color'
              ),
              array(
                  'id' => 'checkbox',
                  'title' => 'Checkbox',
                  'field' => 'checkbox',
                  'options'=>array(
                    array(
                      'label'=>'The label text for the checkbox.',
                      'value'=>'first',
                    ),
                  )
              ),
              array(
                  'id' => 'radio',
                  'title' => 'Radio',
                  'field' => 'radio',
                  'options'=>array(
                    array(
                      'label'=>'Yes, Please.',
                      'value'=>'yes',
                    ),
                    array(
                      'label'=>'No, Thank you.',
                      'value'=>'no',
                    ),
                  )
              ),
              array(
                  'id' => 'select',
                  'title' => 'Select',
                  'field' => 'select',
                  'options'=>array(
                    array(
                      'label'=>'Select an option',
                      'value'=>'default',
                    ),
                    array(
                      'label'=>'Option 1',
                      'value'=>'one',
                    ),
                    array(
                      'label'=>'Option 2',
                      'value'=>'two',
                    ),
                    array(
                      'label'=>'Option 3',
                      'value'=>'three',
                    ),
                  )
              ),
              array(
                'id'=>'selectImage',
                'title'=>'Select Image',
                'field'=>'selectImage',
                'options'=>array(
                  array('value'=>'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif'),
                  array('value'=>'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif'),
                  array('value'=>'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif'),
                  array('value'=>'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif'),
                  array('value'=>'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif')
              )
                ),
              array(
                'id'=>'background',
                'title'=>'Background',
                'field'=>'background'
            )
          ),
      ),
      array(
          'name' => 'basic-fields',
          'title' => 'Basic Fields',
          'icon' => $circlePlus,
          'children' => array(
              array(
                  'name' => 'text',
                  'title' => 'Text',
                  'icon' => $rectangle,
                  'fields' => array(
                      array(
                          'id' => 'text',
                          'title' => 'Text',
                          'field' => 'text',
                          'attributes'=>array(
                            'style'=>array('width'=>'50%')
                          )
                      ),
                      array(
                          'id' => 'defaultText',
                          'title' => 'Text with default',
                          'field' => 'text',
                          'default' => 'Default Text',
                          'attributes'=>array(
                            'style'=>array('width'=>'50%')
                          )
                      ),
                      array(
                          'id' => 'ingenuity',
                          'title' => 'Text field ingenuity',
                          'subtitle'=>'The field of subtitle text.',
                          'before'=>'The field of before text',
                          'after'=>'The field of after text',
                          'field' => 'text',
                          'attributes'=>array(
                            'style'=>array('width'=>'50%')
                          )
                      ),
                      array(
                          'id' => 'placeholder',
                          'title' => 'Text with placeholder',
                          'placeholder'=>'Typed something...',
                          'field' => 'text',
                          'attributes'=>array(
                            'style'=>array('width'=>'50%')
                          )
                      ),
                      array(
                          'id' => 'readonly',
                          'title' => 'Text readonly',
                          'default'=>'Readonly text field, can not be changed',
                          'field' => 'text',
                          'attributes'=>array(
                            'style'=>array('width'=>'50%'),
                            'readOnly'=>true,
                          ),
                      ),
                      array(
                          'id' => 'maxLength',
                          'title' => 'Text with maxlength (5)',
                          'default'=>'abc',
                          'attributes'=>array(
                            'maxLength'=>5,
                            'style'=>array('width'=>'50%'),
                          ),
                          'field' => 'text',
                          
                      ),
                      array(
                          'id' => 'customStyle',
                          'title' => 'Text using custom styles',
                          'attributes'=>array(
                            'style'=>array('borderColor'=>'#93C054','padding'=>'8px 8px'),
                            'outline'=>'#93C054'
                          ),
                          'field' => 'text',
                      ),
                      array(
                          'id' => 'fullWidth',
                          'after'=>'It shows full width if there is no field of title.',
                          'attributes'=>array(
                            'style'=>array('width'=>'50%')
                          ),
                          'field' => 'text',
                      ),
                  ),
              ),
              array(
                  'name' => 'textarea',
                  'title' => 'Textarea',
                  'icon' => $rectangle,
                  'fields' => array(
                      array(
                          'id' => 'textarea',
                          'title'=>'Textarea',
                          'field' => 'textarea',
                      ),
                      array(
                          'id' => 'default',
                          'title'=>'Textarea with default',
                          'field' => 'textarea',
                          'default'=>'This is default value'
                      ),
                      array(
                          'id' => 'placeholder',
                          'title'=>'Text with placeholder',
                          'field' => 'textarea',
                          'placeholder'=>'Typed something...'
                      ),
                      array(
                          'id' => 'ingenuity',
                          'title'=>'Textarea field ingenuity',
                          'subtitle'=>'The field of subtitle text.',
                          'before'=>'The field of before text',
                          'after'=>'The field of after text',
                          'field' => 'textarea',
                          'placeholder'=>'Typed something...'
                      ),
                      array(
                          'id' => 'fullWidth',
                          'after'=>'It shows full width if there is no field of title.',
                          'field' => 'textarea'
                      ),
                  ),
              ),
              array(
                  'name' => 'select',
                  'title' => 'Select',
                  'icon' => $faList,
                  'fields' => array(
                      array(
                          'id' => 'select',
                          'title' => 'Select',
                          'field' => 'select',
                          'options'=>array(
                              array(
                                'label'=>'Select an option',
                                'value'=>'default',
                              ),
                              array(
                                'label'=>'Option 1',
                                'value'=>'one',
                              ),
                              array(
                                'label'=>'Option 2',
                                'value'=>'two',
                              ),
                              array(
                                'label'=>'Option 3',
                                'value'=>'three',
                              ),
                          )
                      ),
                      array(
                          'id' => 'default',
                          'title' => 'Select with default',
                          'field' => 'select',
                          'options'=>array(
                              array(
                                'label'=>'Select an option',
                                'value'=>'default',
                              ),
                              array(
                                'label'=>'Option 1',
                                'value'=>'one',
                              ),
                              array(
                                'label'=>'Option 2',
                                'value'=>'two',
                              ),
                              array(
                                'label'=>'Option 3',
                                'value'=>'three',
                              ),
                          )
                      ),
                      array(
                          'id' => 'multipleSelect',
                          'title' => 'Select with multiple choice',
                          'field' => 'select',
                          'attributes'=>array(
                            'multiple'=>true,
                          ),
                          'options'=>array(
                              array(
                                'label'=>'Option 1',
                                'value'=>'one',
                              ),
                              array(
                                'label'=>'Option 2',
                                'value'=>'two',
                              ),
                              array(
                                'label'=>'Option 3',
                                'value'=>'three',
                              ),
                              array(
                                'label'=>'Option 4',
                                'value'=>'four',
                              ),
                              array(
                                'label'=>'Option 5',
                                'value'=>'five',
                              ),
                              array(
                                'label'=>'Option 6',
                                'value'=>'six',
                              ),
                          )
                      ),
                      array(
                        'field'=>'notice',
                        'content'=>'Select with <b>chosen</b> style.',
                        'variant'=>'info'
                      ),
                      array(
                        'id'=>'chosen',
                        'title'=>'Select with chosen',
                        'field'=>'chosen',
                        'options'=>array(
                          array('label'=>'Option 1','value'=>'one'),
                          array('label'=>'Option 2','value'=>'two'),
                          array('label'=>'Option 3','value'=>'three'),
                          array('label'=>'Option 4','value'=>'four'),
                          array('label'=>'Option 5','value'=>'five'),
                        )
                      ),
                      array(
                        'id'=>'chosenMultiple',
                        'title'=>'Select with multiple chosen',
                        'field'=>'chosen',
                        'attributes'=>array(
                          'multiple'=>true,
                        ),
                        'options'=>array(
                          array('label'=>'Option 1','value'=>'one'),
                          array('label'=>'Option 2','value'=>'two'),
                          array('label'=>'Option 3','value'=>'three'),
                          array('label'=>'Option 4','value'=>'four'),
                          array('label'=>'Option 5','value'=>'five'),
                        )
                      ),

                      array(
                        'id'=>'searchPage',
                        'title'=>'Select with multiple AJAX search Pages',
                        'field'=>'searchPage',
                        'type'=>'pages'
                      ),
                      array(
                        'id'=>'searchPage',
                        'title'=>'Select with multiple AJAX search Posts',
                        'field'=>'searchPage',
                        'type'=>'posts'
                      ),
                      array(
                        'field'=>'notice',
                        'content'=>'Select with <b>predefined wp query</b> options.',
                        'variant'=>'info'
                      ),
                      array(
                        'id'=>'selectPage',
                        'title'=>'Select with pages',
                        'field'=>'pages'
                      ),
                      array(
                        'id'=>'selectPost',
                        'title'=>'Select with posts',
                        'field'=>'posts',
                      ),
                      array(
                        'id'=>'selectCategory',
                        'title'=>'Select with categories',
                        'field'=>'categories'
                      ),
                      array(
                        'id'=>'selectRole',
                        'title'=>'Select with roles',
                        'field'=>'roles'
                      ),
                      array(
                        'id'=>'selectUser',
                        'title'=>'Select with users',
                        'field'=>'users'
                      ),
                      array(
                        'id'=>'selectPostType',
                        'title'=>'Select with postTypes',
                        'field'=>'postTypes'
                      ),
                      array(
                        'id'=>'selectMenu',
                        'title'=>'Select with menu',
                        'field'=>'menus'
                      ),
                      // array(
                      //   'id'=>'selectTaxonomies',
                      //   'title'=>'Select with taxonomies',
                      //   'field'=>'taxonomies'
                      // ),
                  ),
              ),
              array(
                  'name' => 'checkbox',
                  'title' => 'Checkbox',
                  'icon' => $faCheckbox,
                  'fields' => array(
                      array(
                          'id' => 'checkbox',
                          'title' => 'Checkbox',
                          'field' => 'checkbox',
                          'options'=>array(
                            array(
                              'label'=>'The label text for the checkbox.',
                              'value'=>'check',
                            ),
                          )
                      ),
                      array(
                          'id' => 'default',
                          'title' => 'Checkbox with default.',
                          'field' => 'checkbox',
                          'default'=>array('first'),
                          'options'=>array(
                            array(
                              'label'=>'The label text for the checkbox.',
                              'value'=>'first',
                            )
                          )
                      ),
                      array(
                          'id' => 'multipleChoice',
                          'title' => 'Checkbox with multiple choice.',
                          'field' => 'checkbox',
                          'options'=>array(
                            array(
                              'label'=>'Option 1',
                              'value'=>'option-1',
                            ),
                            array(
                              'label'=>'Option 2',
                              'value'=>'option-2',
                            ),
                            array(
                              'label'=>'Option 3',
                              'value'=>'option-3',
                            )
                          )
                      ),
                      array(
                          'id' => 'inlineCheckbox',
                          'title' => 'Checkbox inline with multiple choice.',
                          'field' => 'checkbox',
                          'attributes'=>array(
                            'direction'=>'row',
                          ),
                          'options'=>array(
                            array(
                              'label'=>'Option 1',
                              'value'=>'option-1',
                            ),
                            array(
                              'label'=>'Option 2',
                              'value'=>'option-2',
                            ),
                            array(
                              'label'=>'Option 3',
                              'value'=>'option-3',
                            )
                          )
                      ),
                      array(
                          'id' => 'multipleDefault',
                          'title' => 'Checkbox multiple choice with default.',
                          'field' => 'checkbox',
                          'default'=>array('option-1','option-2'),
                          'options'=>array(
                            array(
                              'label'=>'Option 1',
                              'value'=>'option-1',
                            ),
                            array(
                              'label'=>'Option 2',
                              'value'=>'option-2',
                            ),
                            array(
                              'label'=>'Option 3',
                              'value'=>'option-3',
                            )
                          )
                      ),
                      array(
                          'id' => 'manyItems',
                          'title' => 'Checkbox testing on many items.',
                          'field' => 'checkbox',
                          'after'=>'Vertical scroll showing automatically after add many items',
                          'options'=>array(
                            array(
                              'label'=>'Option 1',
                              'value'=>'option-1',
                            ),
                            array(
                              'label'=>'Option 2',
                              'value'=>'option-2',
                            ),
                            array(
                              'label'=>'Option 3',
                                'value'=>'option-3',
                            ),
                            array(
                              'label'=>'Option 4',
                              'value'=>'option-4',
                            ),
                            array(
                              'label'=>'Option 5',
                              'value'=>'option-5',
                            ),
                            array(
                              'label'=>'Option 6',
                              'value'=>'option-6',
                            ),
                            array(
                              'label'=>'Option 7',
                              'value'=>'option-7',
                            ),
                            array(
                              'label'=>'Option 8',
                              'value'=>'option-8',
                            ),
                            array(
                              'label'=>'Option 9',
                              'value'=>'option-9',
                            ),
                            array(
                              'label'=>'Option 10',
                              'value'=>'option-10',
                            ),
                            array(
                              'label'=>'Option 11',
                              'value'=>'option-11',
                            ),
                            array(
                              'label'=>'Option 12',
                              'value'=>'option-12',
                            ),
                            array(
                              'label'=>'Option 13',
                              'value'=>'option-13',
                            ),
                            array(
                              'label'=>'Option 14',
                              'value'=>'option-14',
                            ),
                            array(
                              'label'=>'Option 15',
                              'value'=>'option-15',
                            ),
                          )
                      ),
                      array(
                        'field'=>'notice',
                        'content'=>'Checkbox with <b>predefined wp query</b> options similar like <b>select</b> field. (see select field for all options models.)',
                        'variant'=>'info'
                      ),
                      array(
                        'id'=>'categories',
                        'title'=>'Checkbox with categories',
                        'field'=>'checkbox',
                        'categories'=>true
                      ),

                  ),
              ),
              array(
                  'name' => 'radio',
                  'title' => 'Radio',
                  'icon' => $faRadio,
                  'fields' => array(
                      array(
                          'id' => 'radio',
                          'title' => 'Radio',
                          'field' => 'radio',
                          'options'=>array(
                            array('label'=>'Option 1','value'=>'option-1'),
                            array('label'=>'Option 2','value'=>'option-2'),
                            array('label'=>'Option 3','value'=>'option-3'),
                          )
                      ),
                      array(
                          'id' => 'default',
                          'title' => 'Radio with default',
                          'field' => 'radio',
                          'default'=>'option-2',
                          'options'=>array(
                            array('label'=>'Option 1','value'=>'option-1'),
                            array('label'=>'Option 2','value'=>'option-2'),
                            array('label'=>'Option 3','value'=>'option-3'),
                          )
                      ),
                      array(
                          'id' => 'inline',
                          'title' => 'Radio with inline style',
                          'field' => 'radio',
                          'attributes'=>array(
                            'direction'=>'row',
                          ),
                          'options'=>array(
                            array('label'=>'Option 1','value'=>'option-1'),
                            array('label'=>'Option 2','value'=>'option-2'),
                            array('label'=>'Option 3','value'=>'option-3'),
                          )
                      ),
                      array(
                          'id' => 'manyItems',
                          'title' => 'Radio testing on many items',
                          'field' => 'radio',
                          'after'=>'Vertical scroll showing automatically after add many items',
                          'options'=>array(
                            array('label'=>'Option 1','value'=>'option-1'),
                            array('label'=>'Option 2','value'=>'option-2'),
                            array('label'=>'Option 3','value'=>'option-3'),
                            array('label'=>'Option 4','value'=>'option-4'),
                            array('label'=>'Option 5','value'=>'option-5'),
                            array('label'=>'Option 6','value'=>'option-6'),
                            array('label'=>'Option 7','value'=>'option-7'),
                            array('label'=>'Option 8','value'=>'option-8'),
                            array('label'=>'Option 9','value'=>'option-9'),
                            array('label'=>'Option 10','value'=>'option-10'),
                            array('label'=>'Option 11','value'=>'option-11'),
                            array('label'=>'Option 12','value'=>'option-12'),
                            array('label'=>'Option 13','value'=>'option-13'),
                            array('label'=>'Option 14','value'=>'option-14'),
                            array('label'=>'Option 15','value'=>'option-15'),
                          )
                      ),
                      array(
                        'field'=>'notice',
                        'content'=>'Radio with <b>predefined wp query</b> options similar like <b>select</b> field. (see select field for all options models.)',
                        'variant'=>'info'
                      ),
                      array(
                        'id'=>'categories',
                        'title'=>'Radio with categories',
                        'field'=>'radio',
                        'categories'=>true
                      ),
                  ),
              ),
          ),
      ),
      array(
          'name' => 'repeaterFields',
          'title' => 'Repeater Fields',
          'icon' => $faClone,
          'children' => array(
            array(
                  'name' => 'repeater',
                  'title' => 'Repeater',
                  'fields' => array(
                      array(
                          'id' => 'wpEditorName',
                          'label' => 'WP Editor Name',
                          'help' => 'Enter your wp editor name here',
                          'field' => 'textarea',
                      ),
                  ),
              ),
            array(
                  'name' => 'group',
                  'title' => 'Group',
                  'fields' => array(
                      array(
                          'id' => 'wpEditorName',
                          'label' => 'WP Editor Name',
                          'help' => 'Enter your wp editor name here',
                          'field' => 'textarea',
                      ),
                  ),
              ),
          )
      ),
      array(
        'name' => 'combineFields',
        'title' => 'Combine Fields',
        'icon' => $faBar,
        'children' => array(
          array(
                'name' => 'accordion',
                'title' => 'Accordion',
                'fields' => array(
                    array(
                        'id' => 'wpEditorName',
                        'label' => 'WP Editor Name',
                        'help' => 'Enter your wp editor name here',
                        'field' => 'textarea',
                    ),
                ),
          ),
          array(
                    'name' => 'tabbed',
                    'title' => 'Tabbed',
                    'fields' => array(
                        array(
                            'id' => 'wpEditorName',
                            'label' => 'WP Editor Name',
                            'help' => 'Enter your wp editor name here',
                            'field' => 'textarea',
                        ),
                    ),
          ),
          array(
                'name' => 'fieldset',
                'title' => 'Fieldset',
                'fields' => array(
                    array(
                        'id' => 'wpEditorName',
                        'label' => 'WP Editor Name',
                        'help' => 'Enter your wp editor name here',
                        'field' => 'textarea',
                    ),
                ),
          ),
        )
        ),
      array(
        'name' => 'mediauploadfields',
        'title' => 'Media and Upload Fields',
        'icon' => $faUpload,
        'children' => array(
          array(
            'name' => 'media',
            'title' => 'media',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'upload',
            'title' => 'upload',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'gallery',
            'title' => 'Gallery',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
        )
      ),
      array(
        'name' => 'editorFields',
        'title' => 'Editor Fields',
        'icon' => $faCode,
        'children' => array(
          array(
            'name' => 'codeeditor',
            'title' => 'Code Editor',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'wpEditor',
            'title' => 'WP Editor',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
        )
      ),
      array(
        'name' => 'colorFields',
        'title' => 'Color Fields',
        'icon' => $faDroplet,
        'children' => array(
          array(
            'name' => 'color',
            'title' => 'Color',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'linkColor',
            'title' => 'Link Color',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'colorGroup',
            'title' => 'Color Group',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'colorPalette',
            'title' => 'Color Palette',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
        )
        ),
      array(
        'name' => 'designFields',
        'title' => 'Design Fields',
        'icon' => $circleHalfStroke,
        'children' => array(
          array(
            'name' => 'background',
            'title' => 'Background',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'typography',
            'title' => 'Typography',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'dimension',
            'title' => 'Dimension',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'Spacing',
            'title' => 'Spacing',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'border',
            'title' => 'Border',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'spinner',
            'title' => 'Spinner',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'number',
            'title' => 'Number',
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
        )
      ),
      array(
        'name' => 'additionalFields',
        'title' => 'Additional Fields',
        'icon' => $faAsterisk,
        'children' => array(
          array(
            'name' => 'slider',
            'title' => 'Slider',
            'icon'=>$faSliders,
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'sorter',
            'title' => 'Sorter',
            'icon'=>$sortNumericDown,
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'sortable',
            'title' => 'Sortable',
            'icon'=>$arrowAlt,
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'switcher',
            'title' => 'Switcher',
            'icon'=>$faSwitch,
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'icons',
            'title' => 'Icons',
            'icon'=>$faStar,
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'map',
            'title' => 'Map',
            'icon'=>$faMap,
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'link',
            'title' => 'Link',
            'icon'=>$faLink,
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'date',
            'title' => 'Date',
            'icon'=>$faCalender,
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'dateAndTime',
            'title' => 'Date and Time',
            'icon'=>$faCalender,
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'imageSelect',
            'title' => 'Image Select',
            'icon'=>$faGrid,
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
          array(
            'name' => 'buttonSet',
            'title' => 'Button Set',
            'icon'=>$faEllipsis,
            'fields' => array(
              array(
                  'id' => 'wpEditorName',
                  'label' => 'WP Editor Name',
                  'help' => 'Enter your wp editor name here',
                  'field' => 'textarea',
              ),
            ),
          ),
        )
        ),
      array(
        'name' => 'dependencies',
        'title' => 'Dependencies',
        'icon' => $faBranch,
        'fields' => array(
          array(
              'id' => 'wpEditorName',
              'label' => 'WP Editor Name',
              'help' => 'Enter your wp editor name here',
              'field' => 'textarea',
          ),
        ),
      ),
      array(
        'name' => 'validate',
        'title' => 'Validate',
        'icon' => $faCircleCheck,
        'fields' => array(
          array(
              'id' => 'wpEditorName',
              'label' => 'WP Editor Name',
              'help' => 'Enter your wp editor name here',
              'field' => 'textarea',
          ),
        ),
      ),
      array(
        'name' => 'sanitize',
        'title' => 'Sanitize',
        'icon' => $faRotateRight,
        'fields' => array(
          array(
              'id' => 'wpEditorName',
              'label' => 'WP Editor Name',
              'help' => 'Enter your wp editor name here',
              'field' => 'textarea',
          ),
        ),
      ),
      array(
        'name' => 'backup',
        'title' => 'Backup',
        'icon' => $faShieldHalf,
        'fields' => array(
          array(
              'id' => 'wpEditorName',
              'label' => 'WP Editor Name',
              'help' => 'Enter your wp editor name here',
              'field' => 'textarea',
          ),
        ),
      ),
      array(
        'name' => 'other',
        'title' => 'Other',
        'icon' => $faBold,
        'fields' => array(
          array(
              'id' => 'wpEditorName',
              'label' => 'WP Editor Name',
              'help' => 'Enter your wp editor name here',
              'field' => 'textarea',
          ),
        ),
      ),
    ),
  ) 
);

require_once CCFR_DIR_PATH . 'inc/Settings.php';