import * as React from 'react';

import blocks from '../../../../template/functions/blocks.json';

const Component: React.FC<{}> = (props) => {
  const [imageUrl, setImageUrl] = wp.element.useState(props.attributes.opengraphImageUrl ? props.attributes.opengraphImageUrl : null);

  return (
    <>
      <h3>Open Graph</h3>

      <wp.blockEditor.MediaUploadCheck>
        <wp.blockEditor.MediaUpload
          allowedTypes={ ['image/png', 'image/jpeg'] }
          onSelect={ (got) => {
            setImageUrl(got.url);
            props.setAttributes({ opengraphImageUrl: got.url });
          }
          render={ ({open}) => (
            <wp.components.Button onClick={ open } isPrimary={ true } isLarge={ true }>
              Open Media Library
            </wp.components.Button>
          ) } />
      </wp.blockEditor.MediaUploadCheck>

      { imageUrl
        ?
          <img
            src={ imageUrl }
            style={{
              marginTop: 20,
              marginBottom: 20,
            }} />
        :
          null
      }

      <wp.components.TextareaControl
        label="Message"
        help="If this field is not filled, the description will be generated from the excerpt, if it exists, or from the content"
        value={props.attributes.opengraphMessage}
        rows={4}
        onChange={val =>
          props.setAttributes({ opengraphMessage: event.target.value })
        }
      />
    </>
  );
}

/**
 * Block name.
 */
const register = () => {
  // Here, implicitly calling global `wp.blocks` variable.
  // This is clearly violating TypeScript idiom, however Parcel is
  // not running type-checks on build/watch.
  wp.blocks.registerBlockType(blocks.events.opengraph.name, {
    title: 'Open Graph',
    icon: 'smiley',
    category: blocks.setting.category,

    supports: {
      html: false,
    },

    attributes: {
      opengraphImageUrl: {
        type: 'string',
        source: 'meta',
        meta: 'opengraphImageUrl',
      },
      opengraphMessage: {
        type: 'string',
        source: 'meta',
        meta: 'opengraphMessage',
      },
    },

    edit: props => Component(props),

    // Data is saved to post meta via attributes.
    save: () => null,
  });
};

export default {
  register,
};
