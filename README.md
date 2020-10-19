# wpcode

<!--- See https://shields.io for others or to customize this set of shields.  --->

![GitHub repo size](https://img.shields.io/github/repo-size/dennislwm/wpcode?style=plastic)
![GitHub language count](https://img.shields.io/github/languages/count/dennislwm/wpcode?style=plastic)
![GitHub top language](https://img.shields.io/github/languages/top/dennislwm/wpcode?style=plastic)
![GitHub last commit](https://img.shields.io/github/last-commit/dennislwm/wpcode?color=red&style=plastic)
![GitHub stars](https://img.shields.io/github/stars/dennislwm/wpcode?style=social)
![GitHub forks](https://img.shields.io/github/forks/dennislwm/wpcode?style=social)
![GitHub watchers](https://img.shields.io/github/watchers/dennislwm/wpcode?style=social)
<span class="badge-patreon"><a href="https://patreon.com/densoload" title="Donate to this project using Patreon"><img src="https://img.shields.io/badge/patreon-donate-yellow.svg" alt="Patreon donate button" /></a></span>

Wordpress starter project.

---
## Table of Contents
- [wpcode](#wpcode)
  - [Table of Contents](#table-of-contents)
  - [About wpcode](#about-wpcode)
    - [Prerequisite](#prerequisite)
  - [Project Structure](#project-structure)
    - [Installation](#installation)
    - [Activation](#activation)
  - [Learn how to develop WP plugins, widgets and REST API](#learn-how-to-develop-wp-plugins-widgets-and-rest-api)
    - [Add Document Type Styles New](#add-document-type-styles-new)
    - [Add Document Type Admin Page](#add-document-type-admin-page)
    - [References](#references)
  - [Create custom WP plugins for transfiguration.sg](#create-custom-wp-plugins-for-transfigurationsg)
  - [Automate creation of custom WP plugins](#automate-creation-of-custom-wp-plugins)
  - [Contributing](#contributing)
  - [Screenshots](#screenshots)
    - [Reach Out!](#reach-out)
    - [License](#license)

---
## About wpcode
**wpcode** was a personal project to:
- learn how to develop Wordpress ["WP"] plugins, widgets and REST API
- create custom WP plugins for transfiguration.sg
- automate creation of custom WP plugins

---
### Prerequisite

* [WP installation](https://wordpress.org)

---
## Project Structure
     wpcode/                              <-- Root of your project
       |- README.md                       <-- This README markdown file
       +- docs/                           <-- Documentation
       +- src/                            <-- Root of source code
          +- plugins/                     <-- Root of plugins code
             +- add_doctype_styles_new/   <-- Learn how to develop WP plugin
             +- add_doctype_admin_page/   <-- Learn how to develop WP plugin

---
### Installation

You can now do one of two installation process:

- Using your FTP client, upload the plugin subfolder, e.g. add_doctype_styles_new, to your wp-content/plugins/ folder within the WP root.
- Zip up your folder into a zip file, e.g. add_doctype_styles_new.zip, and use the WP plugin uploader in wp-admin to add this plugin to your WP installation.

---
### Activation

Once the plugin is installed, it will show up on the plugins page. Now, you can activate it.

---
## Learn how to develop WP plugins, widgets and REST API

### Add Document Type Styles New
- Simple plugin that adds icons to document links within WP. Includes support for PDF, DOC, MP3 and ZIP.
- 
### Add Document Type Admin Page
- Modified Add Document Type Styles New plugin to add a custom admin page. Allows support for additional document types.

NOTE: Krol's plugins above did not display correctly even though they had no errors.

### References
- Free vector icons, accessed 19-Oct-2020, URL: https://www.flaticon.com/
- [Icons made by catkuro](https://www.flaticon.com/authors/catkuro)
- Karol Krol, 2017, WordPress Complete Sixth Edition
- Yannick Lefebvre, 2017, WordPress Plugin Development Cookbook, 2nd Edition

## Create custom WP plugins for transfiguration.sg

TODO

## Automate creation of custom WP plugins

TODO

---
## Contributing

Please read the [contributing guide](https://github.com/dennislwm/wpcode/blob/master/CONTRIBUTING.md) on how you can actively participate in the development of this repository.

---
## Screenshots

- [Screenshot 1](https://snipboard.io/A9rJuV.jpg)
- [Screenshot 2](https://doy2mn9upadnk.cloudfront.net/uploads/default/original/4X/9/7/b/97b397638c2d42651b97c21511b09b9e440b0f2f.jpeg)

---
### Reach Out!

Please consider giving this repository a star on GitHub.

---
### License
The **wpcode** source code is licensed under the [GPL-3.0 license](https://github.com/dennislwm/dscode/blob/master/LICENSE).