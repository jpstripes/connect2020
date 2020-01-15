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

  return 'https://twitter.com/intent/tweet?hashtags=JP_Stripes&text=' .
    urlencode($post->post_title . ' ' . get_permalink($post->ID));
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
