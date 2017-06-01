# WaterUp - Server REST API
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/956ba2bc059b440b99c9eeb3f47d87eb)](https://www.codacy.com/app/jorisrietveld/WaterUpRestApi?utm_source=github.com&utm_medium=referral&utm_content=INF1I/WaterUpRestApi&utm_campaign=badger) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/INF1I/WaterUpRestApi/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/INF1I/WaterUpRestApi/?branch=master) ![PHP version](https://img.shields.io/badge/PHP%20version-7.1-brightgreen.svg)<br/>
This repository contains the source code of the backend API providing statistics, warnings and
plant clarification to the mobile application. The api will be used by the app to identify a plant
species based on an photo and stores MQTT messages send by the app and plant pot.


## About this project
We are developing an internet of things device as part of the project
innovate at Stenden University of applied sciences. In this project
we are free to develop an product based on the internet of things.
We chose to create an plant pot with an mobile application that is
capable of taking care that its hosting.

The plant pot holds an water reservoir and multiple sensors for
controlling the amount of water the plant should receive. Because every
plant is difrent it needs to adjust the configuration based on the plant
species.

The mobile app is used to notify users about the state of the pot and
send warnings when something is wrong like if the water reservoir is
almost empty or if the plant is receiving to much sun light. The app
will also be used to configure the right plant species by taking an
picture of the plant, and let machine learning classify the species.

## Documentation
There is documentation available about configuring an development
environment, API usage and the server configuration.You can find
it [here](documentation/readme.md). If your having any trouble
setting up your development environment, API usage, server configuration
or have some suggestions please submit an [issue here](https://github.com/INF1I/WaterUp-RestApi/issues/new).

## Live version
You can view an live version of the REST API at [https://api.inf1i.ga/](https://api.inf1i.ga/).

## Repository Authors
Joris Rietveld - jorisrietveld@gmail.com<br>

## Project members
Rowan Nijland - rowan.nijland@student.stenden.com<br>
Alwin Kroesen - alwin.kroesen@student.stenden.com<br>
Joris Rietveld - jorisrietveld@gmail.com<br>
Fekke Fekkes - fekke.fekkes@student.stenden.com<br>
Rick Margés - rick.marges@student.stenden.com<br>
Jeroen Eefting - jeroen.eefting@student.stenden.com<br>
Roelof Doevendans - roelof.doevendans@student.stenden.com<br>

## Licencing
WaterUp - An IOT plant growing solution
Copyright (C) 2017 Members of the inf1i project group

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
