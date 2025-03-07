<?php
namespace Opencart\Catalog\Model\Localisation;
/**
 * Class Language
 *
 * @example $language_model = $this->model_localisation_language;
 *
 * Can be called from $this->load->model('localisation/language');
 *
 * @package Opencart\Catalog\Model\Localisation
 */
class Language extends \Opencart\System\Engine\Model {
	/**
	 * @var array<int|string, array<string, mixed>>
	 */
	private array $data = [];

	/**
	 * Get Language
	 *
	 * @param int $language_id primary key of the language record
	 *
	 * @return array<string, mixed> language record that has language ID
	 */
	public function getLanguage(int $language_id): array {
		if (isset($this->data[$language_id])) {
			return $this->data[$language_id];
		}

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "language` WHERE `language_id` = '" . (int)$language_id . "'");

		$language = $query->row;

		if ($language) {
			$language['image'] = HTTP_SERVER;

			if (!$language['extension']) {
				$language['image'] .= 'catalog/';
			} else {
				$language['image'] .= 'extension/' . $language['extension'] . '/catalog/';
			}

			$language['image'] .= 'language/' . $language['code'] . '/' . $language['code'] . '.png';
		}

		$this->data[$language_id] = $language;

		return $language;
	}

	/**
	 * Get Language By Code
	 *
	 * @param string $code
	 *
	 * @return array<string, mixed>
	 */
	public function getLanguageByCode(string $code): array {
		if (isset($this->data[$code])) {
			return $this->data[$code];
		}

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "language` WHERE `code` = '" . $this->db->escape($code) . "'");

		$language = $query->row;

		if ($language) {
			$language['image'] = HTTP_SERVER;

			if (!$language['extension']) {
				$language['image'] .= 'catalog/';
			} else {
				$language['image'] .= 'extension/' . $language['extension'] . '/catalog/';
			}

			$language['image'] .= 'language/' . $language['code'] . '/' . $language['code'] . '.png';
		}

		$this->data[$code] = $language;

		return $language;
	}

	/**
	 * Get Languages
	 *
	 * @return array<string, array<string, mixed>> language record
	 */
	public function getLanguages(): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "language` WHERE `status` = '1' ORDER BY `sort_order`, `name`";

		$results = $this->cache->get('language.' . md5($sql));

		if (!$results) {
			$query = $this->db->query($sql);

			$results = $query->rows;

			$this->cache->set('language.' . md5($sql), $results);
		}

		$language_data = [];

		foreach ($results as $result) {
			$image = HTTP_SERVER;

			if (!$result['extension']) {
				$image .= 'catalog/';
			} else {
				$image .= 'extension/' . $result['extension'] . '/catalog/';
			}

			$language_data[$result['code']] = ['image' => $image . 'language/' . $result['code'] . '/' . $result['code'] . '.png'] + $result;
		}

		return $language_data;
	}
}
