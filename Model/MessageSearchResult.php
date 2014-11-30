<?php

/*
 * This file is part of the CLSlackBundle.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Model;

use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class MessageSearchResult extends AbstractSearchResultModel
{
    /**
     * @return SearchMessage[]
     */
    public function getMatches()
    {
        return parent::getMatches();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure(OptionsResolverInterface $resolver)
    {
        parent::configure($resolver);
        
        $resolver->setAllowedTypes([
            'matches' => ['array<\CL\Slack\Model\SearchMessage>'],
        ]);
        
        $resolver->setNormalizers([
            'matches' => function (Options $options, $value) {
                if (is_array($value)) {
                    $value = array_map(function ($item) {
                        return new SearchMessage($item);
                    }, $value);
                }
                
                return $value;
            },
        ]);
    }
}
