<?php
/*
 * Copyright (C) 2015-2016 Matthew David Brown
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>. 
 */

/**
 * @author Lord Matt
 * 
 * Set these values so that Gneiss knows how to connect to a database. 
 * 
 * Can be left blank if you are not using a database.
 */

// DATABAS CONNECTION

$CONF['DB'] = array();

$CONF['DB'][0] = array();
$CONF['DB'][0]['user']          = '';
$CONF['DB'][0]['password']      = '';
$CONF['DB'][0]['database']      = '';
$CONF['DB'][0]['host']          = '';

/*
 // additional connections can be defined in a simialr manor.
$CONF['DB'][1] = array();
$CONF['DB'][1]['user']          = '';
$CONF['DB'][1]['password']      = '';
$CONF['DB'][1]['database']      = '';
$CONF['DB'][1]['host']          = '';
 */