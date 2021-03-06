<?php
/***************************************************************
*  Copyright notice
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * @copyright 	Copyright belongs to the respective authors
 * @license 	http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class Tx_HnmBlog_Domain_Model_Comment extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var string
	 * @validate NotEmpty
	 */
	protected $text;

	/**
	 * @var Tx_HnmBlog_Domain_Model_Post
	 */
	protected $post;

	/**
	 * @param string $text
	 * @return Tx_HnmBlog_Domain_Model_Comment this
	 */
	public function setText($text) {
		$this->text = $text;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * @param Tx_HnmBlog_Domain_Model_Post $post
	 * @return Tx_HnmBlog_Domain_Model_Comment this
	 */
	public function setPost(Tx_HnmBlog_Domain_Model_Post $post) {
		$this->post = $post;
		return $this;
	}

	/**
	 * @return Tx_HnmBlog_Domain_Model_Post
	 */
	public function getPost() {
		return $this->post;
	}
}
?>