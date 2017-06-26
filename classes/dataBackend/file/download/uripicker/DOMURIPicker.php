<?php

namespace malkusch\bav;

/**
 * Finds the download URI in the Bundesbank HTML page with XPath.
 *
 * @author Markus Malkusch <markus@malkusch.de>
 * @license WTFPL
 */
class DOMURIPicker implements URIPicker
{

    /**
     * Returns true if this implementation is available on this platform.
     *
     * @return bool
     */
    public function isAvailable()
    {
        return class_exists("\DOMXPath");
    }

    /**
     * Returns the download URI from the Bundesbank html page.
     *
     * @throws URIPickerException
     * @return string
     */
    public function pickURI($html)
    {
        $doc = new \DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML($html);

        $xpath = new \DOMXpath($doc);

        $result = $xpath->query(
            "//*[contains(text(),'Bankleitzahlendateien')]"
        );

        foreach ($result as $node) {
            if ($node->parentNode && $node->parentNode->nodeName == 'a') {
                $hrefNode = $node->parentNode->attributes->getNamedItem('href');

                if ($hrefNode && strpos($hrefNode->value, '.txt')) {
                    return $hrefNode->value;
                }
            }
        }

        throw new URIPickerException("Did not find download URI");
    }
}
