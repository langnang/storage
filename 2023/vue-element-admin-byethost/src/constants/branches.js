
import { Random } from "mockjs"
export const branch_options = [
  { label: '基础', value: 'base', description: '', visible: true, disabled: true, },
  { label: '相册', value: 'album', description: '', visible: true, disabled: true, },
  { label: '文章', value: 'article', description: '', visible: true, disabled: false, },
  { label: '音频', value: 'audio', description: '', visible: true, disabled: true, },
  { label: '拓展', value: 'awesome', description: '', visible: true, disabled: true, },
  { label: '书册', value: 'book', description: '', visible: true, disabled: true, },
  { label: '日历', value: 'calender', description: '', visible: true, disabled: true, },
  { label: '备忘', value: 'cheatsheet', description: '', visible: true, disabled: true, },
  { label: '云盘', value: 'cloud_storage', description: '', visible: true, disabled: true, },
  { label: '集合', value: 'collection', description: '', visible: true, disabled: true, },
  { label: '部署', value: 'deploy', description: '', visible: true, disabled: true, },
  { label: '依赖', value: 'dependency', description: '', visible: true, disabled: true, },
  { label: '词典', value: 'dictionary', description: '', visible: true, disabled: true, },
  { label: '论坛', value: 'forum', description: '', visible: true, disabled: true, },
  { label: '游戏', value: 'game', description: '', visible: true, disabled: true, },
  { label: '图表', value: 'graph', description: '', visible: true, disabled: true, },
  { label: '图标', value: 'icon', description: '', visible: true, disabled: false, },
  { label: '图片', value: 'image', description: '', visible: true, disabled: true, },
  { label: '资讯', value: 'news', description: '', visible: true, disabled: true, },
  { label: '名词', value: 'noun', description: '', visible: true, disabled: true, },
  { label: '小说', value: 'novel', description: '', visible: true, disabled: true, },
  { label: '接口', value: 'openapi', description: '', visible: true, disabled: true, },
  { label: '封装', value: 'package', description: '', visible: true, disabled: true, },
  { label: '诗词', value: 'poetry', description: '', visible: true, disabled: true, },
  { label: '资产', value: 'property', description: '财产、道具', visible: true, disabled: true, },
  { label: '试题', value: 'question', description: '', visible: true, disabled: false, },
  { label: '语录', value: 'quote', description: '', visible: true, disabled: true, },
  { label: '食谱', value: 'recipe', description: '', visible: true, disabled: true, },
  { label: '规则', value: 'rule', description: '', visible: true, disabled: true, },
  { label: '商城', value: 'shop', description: '', visible: true, disabled: true, },
  { label: '片段', value: 'snippet', description: '', visible: true, disabled: true, },
  { label: '应用', value: 'software', description: '', visible: true, disabled: true, },
  { label: '爬虫', value: 'spider', description: '', visible: true, disabled: true, },
  { label: '代办', value: 'todo', description: '', visible: true, disabled: true, },
  { label: '工具', value: 'toolkit', description: '', visible: true, disabled: true, },
  { label: '视频', value: 'video', description: '', visible: true, disabled: true, },
  { label: '导航', value: 'webstack', description: '', visible: true, disabled: false, },
  { label: '百科', value: 'wiki', description: '', visible: true, disabled: true, },
].filter(v => v.visible).map(v => ({
  ...v, backgroundColor: Random.color(),
  dataImage: Random.dataImage('300x100', v.label),
}))

export default branch_options