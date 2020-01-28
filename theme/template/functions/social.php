<?php

/**
 * Generic encoded URL for various SNS.
 */
function share_url($post)
{
  if (!$post->ID) {
    return;
  }

  return urlencode(get_permalink($post->ID));
}

function tweet_url($post)
{
  if (!$post->ID) {
    return;
  }

  $qs = implode(
    [
      'hashtags=JP_Stripes,JPSC2020',
      'via=jpstripes',
      'text=' .
        urlencode($post->post_title . ' ' . get_permalink($post->ID) . "\n")
    ],
    '&'
  );

  return 'https://twitter.com/intent/tweet?' . $qs;
}

function facebook_url($post)
{
  if (!$post->ID) {
    return;
  }

  return 'https://www.facebook.com/sharer/sharer.php?u=' . share_url($post);
}

function line_url($post)
{
  if (!$post->ID) {
    return;
  }

  return 'https://lineit.line.me/share/ui?url=' . share_url($post);
}

function calendar_url()
{
  return implode(
    [
      'https://www.google.com/calendar/event?action=TEMPLATE',
      'text=JP_Stripes+Connect+2020',
      'dates=20200418T010000Z/20200418T100000Z',
      'location=' . urlencode('東京都港区南青山3-8-38 南青山東急ビル'),
      'details=' .
        urlencode(
          implode(
            [
              'Webサイト',
              'https://connect2020.jpstripes.com',
              '',
              'Twitter',
              'https://twitter.com/jpstripes',
              '',
              'Facebook Group',
              'https://www.facebook.com/groups/1826257457627959/'
            ],
            "\n"
          )
        )
    ],
    '&'
  );
}
