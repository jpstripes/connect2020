import blocks from '../../../../template/functions/blocks.json';

/**
 * Block name.
 */
const register = () => {
  // Here, implicitly calling global `wp.blocks` variable.
  // This is clearly violating TypeScript idiom, however Parcel is
  // not running type-checks on build/watch.
  wp.blocks.registerBlockType(blocks.events.speaker.name, {
    title: 'Speaker',
    icon: 'smiley',
    category: blocks.setting.category,

    supports: {
      html: false,
    },

    attributes: {
      name: {
        type: 'string',
        source: 'meta',
        meta: 'name',
      },
      company: {
        type: 'string',
        source: 'meta',
        meta: 'company',
      },
      profile: {
        type: 'string',
        source: 'meta',
        meta: 'profile',
      },
      iconUrl: {
        type: 'string',
        source: 'meta',
        meta: 'iconUrl',
      },
      twitter: {
        type: 'string',
        source: 'meta',
        meta: 'twitter',
      },
      facebook: {
        type: 'string',
        source: 'meta',
        meta: 'facebook',
      },
    },

    edit: props => {
      return (
        <>
          <h3>Speaker</h3>

          <wp.components.TextControl
            label="Name"
            value={props.attributes.name}
            onChange={val => props.setAttributes({ name: event.target.value })}
          />

          <wp.components.TextControl
            label="Company"
            value={props.attributes.company}
            onChange={val =>
              props.setAttributes({ company: event.target.value })
            }
          />

          <wp.components.TextareaControl
            label="Profile"
            value={props.attributes.profile}
            rows={8}
            onChange={val =>
              props.setAttributes({ profile: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Icon URL"
            value={props.attributes.iconUrl}
            onChange={val =>
              props.setAttributes({ iconUrl: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Twitter URL"
            value={props.attributes.twitter}
            onChange={val =>
              props.setAttributes({ twitter: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Facebook URL"
            value={props.attributes.facebook}
            onChange={val =>
              props.setAttributes({ facebook: event.target.value })
            }
          />
        </>
      );
    },

    // Data is saved to post meta via attributes.
    save: () => null,
  });
};

export default {
  register,
};
