/**
 * BLOCK: mic-card
 *
 * Registering a basic block with Gutenberg.
 * Simple block, renders and saves the same content without any interactivity.
 */

//  Import CSS.
import './style.scss';
import './editor.scss';

const { MediaUpload, MediaUploadCheck, PlainText } = wp.editor;
const { __ } = wp.i18n; // Import __() from wp.i18n
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks
const { Button } = wp.components;

/**
 * Register: aa Gutenberg Block.
 *
 * Registers a new block provided a unique name and an object defining its
 * behavior. Once registered, the block is made editor as an option to any
 * editor interface where blocks are implemented.
 *
 * @link https://wordpress.org/gutenberg/handbook/block-api/
 * @param  {string}   name     Block name.
 * @param  {Object}   settings Block settings.
 * @return {?WPBlock}          The block, if it has been successfully
 *                             registered; otherwise `undefined`.
 */
registerBlockType( 'mic/mic-card-img-bottom', {
	// Block name. Block names must be string that contains a namespace prefix. Example: my-plugin/my-custom-block.
	title: __( 'MiC - image bottom' ), // Block title.
	icon: 'index-card', // Block icon from Dashicons → https://developer.wordpress.org/resource/dashicons/.
	category: 'mic-blocks', // Block category — Group blocks together based on common traits E.g. common, formatting, layout widgets, embed.
	attributes: {
		title: {
			source: 'text',
			selector: '.card__title',
		},
		linkUrl: {
			source: 'text',
			selector: 'a',
			attribute: 'html',
		},
		imageUrl: {
			source: 'attribute',
			attribute: 'src',
			selector: '.card__image img',
		},
		imageAlt: {
			source: 'attribute',
			attribute: 'alt',
			selector: '.card__image img',
		},
	},
	edit( { attributes, className, setAttributes } ) {
		const getImageButton = openEvent => {
			if ( attributes.imageUrl ) {
				return (
					<img
						src={ attributes.imageUrl }
						onClick={ openEvent }
						className="image"
					/>
				);
			}
			return (
				<div className="button-container">
					<Button onClick={ openEvent } className="button button-large">
						Open Media Library
					</Button>
				</div>
			);
		};

		const onImageSelect = imageObject => {
			console.info( imageObject );
			setAttributes( {
				imageUrl: imageObject.sizes.large.url,
				mageAlt: imageObject.alt,
			} );
		};

		return (
			<div className="card image-bottom bg-white w-100 md:w-1/3 lg:w-1/4 flex-grow mb-8 md:ml-8">
				<h3 className="card__title text-umblue pl-4 py-6 m-0 md:text-xl">
					<PlainText
						onChange={ content => setAttributes( { title: content } ) }
						value={ attributes.title }
						placeholder="Your card title"
						className="heading"
					/>
				</h3>
				<p className="card__url">
					<PlainText
						onChange={ content => setAttributes( { linkUrl: content } ) }
						value={ attributes.linkUrl }
						placeholder="Your card link URL"
					/>
				</p>
				<img src={ attributes.imageUrl } alt={ attributes.imageAlt } />
				<MediaUploadCheck>
					<MediaUpload
						onSelect={ onImageSelect }
						type="image"
						value={ attributes.imageID }
						render={ ( { open } ) => (
							<Button onClick={ open } className="button button-large">
								Open Media Library
							</Button>
						) }
					/>
				</MediaUploadCheck>
			</div>
		);
	},
	save( { attributes } ) {
		const cardImage = ( src, alt ) => {
			if ( ! src ) {
				return (
					<img
						className="card__image"
						src="http://fpoimg.com/500x200"
						alt=" "
					/>
				);
			}
			if ( alt ) {
				return <img className="card__image" src={ src } alt={ alt } />;
			}
			// No alt set, so let's hide it from screen readers
			return (
				<img className="card__image" src={ src } alt="" aria-hidden="true" />
			);
		};
		return (
			<div className="card image-bottom bg-white w-100 md:w-1/3 lg:w-1/4 flex-grow mb-8 md:ml-8">
				<a href={ attributes.linkUrl }>
					<h3 className="card__title text-umblue pl-4 py-6 m-0 md:text-xl">
						{ attributes.title }
					</h3>
				</a>
				{ cardImage( attributes.imageUrl, attributes.imageAlt ) }
			</div>
		);
	},
} );
