import blocks from '../../../../template/functions/blocks.json';

/**
 * Block name.
 */
const register = () => {
  // Here, implicitly calling global `wp.blocks` variable.
  // This is clearly violating TypeScript idiom, however Parcel is
  // not running type-checks on build/watch.
  wp.blocks.registerBlockType(blocks.events.speakers.name, {
    title: 'Speakers',
    icon: 'smiley',
    category: blocks.setting.category,

    supports: {
      html: false,
    },

    attributes: {
      // One
      name_1: {
        type: 'string',
        source: 'meta',
        meta: 'name_1',
      },
      company_1: {
        type: 'string',
        source: 'meta',
        meta: 'company_1',
      },
      profile_1: {
        type: 'string',
        source: 'meta',
        meta: 'profile_1',
      },
      iconUrl_1: {
        type: 'string',
        source: 'meta',
        meta: 'iconUrl_1',
      },
      twitter_1: {
        type: 'string',
        source: 'meta',
        meta: 'twitter_1',
      },
      facebook_1: {
        type: 'string',
        source: 'meta',
        meta: 'facebook_1',
      },
      // Two
      name_2: {
        type: 'string',
        source: 'meta',
        meta: 'name_2',
      },
      company_2: {
        type: 'string',
        source: 'meta',
        meta: 'company_2',
      },
      profile_2: {
        type: 'string',
        source: 'meta',
        meta: 'profile_2',
      },
      iconUrl_2: {
        type: 'string',
        source: 'meta',
        meta: 'iconUrl_2',
      },
      twitter_2: {
        type: 'string',
        source: 'meta',
        meta: 'twitter_2',
      },
      facebook_2: {
        type: 'string',
        source: 'meta',
        meta: 'facebook_2',
      },
      // Three
      name_3: {
        type: 'string',
        source: 'meta',
        meta: 'name_3',
      },
      company_3: {
        type: 'string',
        source: 'meta',
        meta: 'company_3',
      },
      profile_3: {
        type: 'string',
        source: 'meta',
        meta: 'profile_3',
      },
      iconUrl_3: {
        type: 'string',
        source: 'meta',
        meta: 'iconUrl_3',
      },
      twitter_3: {
        type: 'string',
        source: 'meta',
        meta: 'twitter_3',
      },
      facebook_3: {
        type: 'string',
        source: 'meta',
        meta: 'facebook_3',
      },
      // Four
      name_4: {
        type: 'string',
        source: 'meta',
        meta: 'name_4',
      },
      company_4: {
        type: 'string',
        source: 'meta',
        meta: 'company_4',
      },
      profile_4: {
        type: 'string',
        source: 'meta',
        meta: 'profile_4',
      },
      iconUrl_4: {
        type: 'string',
        source: 'meta',
        meta: 'iconUrl_4',
      },
      twitter_4: {
        type: 'string',
        source: 'meta',
        meta: 'twitter_4',
      },
      facebook_4: {
        type: 'string',
        source: 'meta',
        meta: 'facebook_4',
      },
      // Five
      name_5: {
        type: 'string',
        source: 'meta',
        meta: 'name_5',
      },
      company_5: {
        type: 'string',
        source: 'meta',
        meta: 'company_5',
      },
      profile_5: {
        type: 'string',
        source: 'meta',
        meta: 'profile_5',
      },
      iconUrl_5: {
        type: 'string',
        source: 'meta',
        meta: 'iconUrl_5',
      },
      twitter_5: {
        type: 'string',
        source: 'meta',
        meta: 'twitter_5',
      },
      facebook_5: {
        type: 'string',
        source: 'meta',
        meta: 'facebook_5',
      },
    },

    edit: props => {
      return (
        <>
          <h3>Speakers</h3>

          <h4>One</h4>

          <wp.components.TextControl
            label="Name"
            value={props.attributes.name_1}
            onChange={val =>
              props.setAttributes({ name_1: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Company"
            value={props.attributes.company_1}
            onChange={val =>
              props.setAttributes({ company_1: event.target.value })
            }
          />

          <wp.components.TextareaControl
            label="Profile"
            value={props.attributes.profile_1}
            rows={8}
            onChange={val =>
              props.setAttributes({ profile_1: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Icon URL"
            value={props.attributes.iconUrl_1}
            onChange={val =>
              props.setAttributes({ iconUrl_1: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Twitter URL"
            value={props.attributes.twitter_1}
            onChange={val =>
              props.setAttributes({ twitter_1: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Facebook URL"
            value={props.attributes.facebook_1}
            onChange={val =>
              props.setAttributes({ facebook_1: event.target.value })
            }
          />

          <h4>Two</h4>

          <wp.components.TextControl
            label="Name 2"
            value={props.attributes.name_2}
            onChange={val =>
              props.setAttributes({ name_2: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Company"
            value={props.attributes.company_2}
            onChange={val =>
              props.setAttributes({ company_2: event.target.value })
            }
          />

          <wp.components.TextareaControl
            label="Profile"
            value={props.attributes.profile_2}
            rows={8}
            onChange={val =>
              props.setAttributes({ profile_2: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Icon URL"
            value={props.attributes.iconUrl_2}
            onChange={val =>
              props.setAttributes({ iconUrl_2: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Twitter URL"
            value={props.attributes.twitter_2}
            onChange={val =>
              props.setAttributes({ twitter_2: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Facebook URL"
            value={props.attributes.facebook_2}
            onChange={val =>
              props.setAttributes({ facebook_2: event.target.value })
            }
          />

          <h4>Three</h4>

          <wp.components.TextControl
            label="Name"
            value={props.attributes.name_3}
            onChange={val =>
              props.setAttributes({ name_3: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Company"
            value={props.attributes.company_3}
            onChange={val =>
              props.setAttributes({ company_3: event.target.value })
            }
          />

          <wp.components.TextareaControl
            label="Profile"
            value={props.attributes.profile_3}
            rows={8}
            onChange={val =>
              props.setAttributes({ profile_3: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Icon URL"
            value={props.attributes.iconUrl_3}
            onChange={val =>
              props.setAttributes({ iconUrl_3: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Twitter URL"
            value={props.attributes.twitter_3}
            onChange={val =>
              props.setAttributes({ twitter_3: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Facebook URL"
            value={props.attributes.facebook_3}
            onChange={val =>
              props.setAttributes({ facebook_3: event.target.value })
            }
          />

          <h4>Four</h4>

          <wp.components.TextControl
            label="Name"
            value={props.attributes.name_4}
            onChange={val =>
              props.setAttributes({ name_4: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Company"
            value={props.attributes.company_4}
            onChange={val =>
              props.setAttributes({ company_4: event.target.value })
            }
          />

          <wp.components.TextareaControl
            label="Profile"
            value={props.attributes.profile_4}
            rows={8}
            onChange={val =>
              props.setAttributes({ profile_4: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Icon URL"
            value={props.attributes.iconUrl_4}
            onChange={val =>
              props.setAttributes({ iconUrl_4: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Twitter URL"
            value={props.attributes.twitter_4}
            onChange={val =>
              props.setAttributes({ twitter_4: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Facebook URL"
            value={props.attributes.facebook_4}
            onChange={val =>
              props.setAttributes({ facebook_4: event.target.value })
            }
          />

          <h4>Five</h4>

          <wp.components.TextControl
            label="Name"
            value={props.attributes.name_5}
            onChange={val =>
              props.setAttributes({ name_5: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Company"
            value={props.attributes.company_5}
            onChange={val =>
              props.setAttributes({ company_5: event.target.value })
            }
          />

          <wp.components.TextareaControl
            label="Profile"
            value={props.attributes.profile_5}
            rows={8}
            onChange={val =>
              props.setAttributes({ profile_5: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Icon URL"
            value={props.attributes.iconUrl_5}
            onChange={val =>
              props.setAttributes({ iconUrl_5: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Twitter URL"
            value={props.attributes.twitter_5}
            onChange={val =>
              props.setAttributes({ twitter_5: event.target.value })
            }
          />

          <wp.components.TextControl
            label="Facebook URL"
            value={props.attributes.facebook_5}
            onChange={val =>
              props.setAttributes({ facebook_5: event.target.value })
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
