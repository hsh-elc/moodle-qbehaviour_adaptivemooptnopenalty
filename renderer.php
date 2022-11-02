<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Renderer for outputting parts of a question belonging to the
 * adaptive (no penalties) behaviour for MooPT questions.
 *
 * @package    qbehaviour
 * @subpackage adaptivemooptnopenalty
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../adaptivemoopt/renderer.php');


/**
 * Renderer for outputting parts of a question belonging to the
 * adaptive (no penalties) behaviour for MooPT questions.
 *
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qbehaviour_adaptivemooptnopenalty_renderer extends qbehaviour_adaptivemoopt_renderer {
    protected function grading_details(qbehaviour_adaptivemoopt_mark_details $details, question_display_options $options) {
        $mark = $details->get_formatted_marks($options->markdp);
        return get_string('gradingdetails', 'qbehaviour_adaptivemoopt', $mark);
    }

    protected function disregarded_info() {
        return '';
    }
}
