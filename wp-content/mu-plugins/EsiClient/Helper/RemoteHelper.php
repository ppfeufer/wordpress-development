<?php

/**
 * Copyright (C) 2017 Rounon Dax
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

namespace WordPress\EsiClient\Helper;

\defined('ABSPATH') or die();

class RemoteHelper {
    /**
     * Getting data from a remote source
     *
     * @param string $url
     * @param array $parameter
     * @return mixed
     */
    public function getRemoteData(string $url, string $method = 'get', array $parameter = []) {
        $returnValue = null;
        $params = '';

        switch($method) {
            case 'get':
                if(\count($parameter) > 0) {
                    $params = '?' . \http_build_query($parameter);
                }

                $remoteData = \wp_remote_get($url . $params);
                break;

            case 'post':
                $remoteData = \wp_remote_post($url, [
                    'headers' => [
                        'Content-Type' => 'application/json; charset=utf-8'
                    ],
                    'body' => \json_encode($parameter),
                    'method' => 'POST'
                ]);
                break;
        }

        if(\is_array($remoteData)) {
            $returnValue = $remoteData;
        }

        return $returnValue;
    }
}
